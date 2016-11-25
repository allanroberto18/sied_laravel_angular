module.exports = function ($scope, $log, $uibModal, ClientAPIService) {

  $scope.title = '';

  $scope.column = 'col-xs-12 col-sm-12 col-md-12 col-lg-12';
  $scope.loadList = '';
  $scope.showForm = false;
  $scope.loadForm = false;

  $scope.items = {};
  $scope.total = 0;
  $scope.perPage = 10;
  $scope.pagination = {
    current: 1
  };

  $scope.itemsSelectedAll = false;

  $scope.errors = '';
  $scope.message = '';

  $scope.token = '';
  $scope.icones = {};
  $scope.entity = {};
  $scope.animationsEnabled = true;

  $scope.pageChanged = function (page) {
    list(page);
  };

  var list = function (page) {
    $scope.loadList = true;
    ClientAPIService.getList('pagina', page)
      .then(function (result) {
        $scope.items = result.data;

        $scope.total = result.data.total

        $scope.loadList = false;
      });
  };

  $scope.init = function () {
    list(1);
  }

  $scope.getToken = function () {
    ClientAPIService.getToken().success(function (data, status) {
      $scope.token = data;
    });
  };

  $scope.edit = function (check) {
    $scope.showForm = check;

    $scope.column = 'col-xs-12 col-sm-12 col-md-12 col-lg-12';

    if (check) {
      $scope.errors = '';

      $scope.message = '';

      $scope.column = 'col-xs-12 col-sm-12 col-md-6 col-lg-6';

      $scope.getToken();
    }

    return;
  };

  $scope.new = function () {
    $scope.title = 'Novo Registro';

    $scope.edit(true);
  };

  $scope.load = function (entity) {
    $scope.title = 'Alterar Registro #' + entity.id;

    $scope.entity = entity;

    $scope.edit(true);
  };

  $scope.closeMessage = function () {
    $scope.message = '';
  }

  $scope.cancel = function () {
    $scope.entity = {};
    $scope.errors = '';
  };

  $scope.close = function () {
    $scope.cancel();

    $scope.edit(false);
  };

  $scope.checkAll = function () {
    if ($scope.itemsSelectedAll) {
      $scope.itemsSelectedAll = true;
    } else {
      $scope.itemsSelectedAll = false;
    }

    angular.forEach($scope.items.data, function (item) {
      item.Selected = $scope.itemsSelectedAll;
    });
  };

  $scope.delete = function (key, entity) {
    var modulo = 'pagina/delete/' + entity.id;

    var modalInstance = $uibModal.open({
      animation: true,
      ariaLabelledBy: 'modal-title',
      ariaDescribedBy: 'modal-body',
      templateUrl: 'modal.tpl.html',
      controller: 'ModalService',
      resolve: {
        title: function () {
          return 'Atenção';
        },
        message: function () {
          return 'Deseja excluir o registro #' + entity.id;
        },
        entity: function () {
          return entity;
        }
      }
    });

    modalInstance.result.then(function () {
      $scope.loadList = true;

      var selected = [];
      selected.push = entity.id;
      ClientAPIService.getDelete(modulo, selected)
        .success(function (data) {
          $scope.message = data.data;
          $scope.items.data.splice(key, 1);
          if ($scope.items.data.length == 0) {
            list($scope.items.current_page);
          }
          $scope.entity = {};
          $scope.loadList = false;
        })
        .error(function (data, status) {
            if (status == 422) {
              $scope.errors = data.data;
              $scope.loadList = false;
            }
          }
        );
    });
  };

  $scope.deleteSelected = function () {
    var modalInstance = $uibModal.open({
      animation: true,
      ariaLabelledBy: 'modal-title',
      ariaDescribedBy: 'modal-body',
      templateUrl: 'modal.tpl.html',
      controller: 'ModalService',
      resolve: {
        title: function () {
          return 'Atenção';
        },
        message: function () {
          return 'Deseja confirmar a exclusão dos registros selecionados?';
        },
        entity: function () {
          return {};
        }
      }
    });
    modalInstance.result.then(function () {
      $scope.message = '';

      $scope.loadList = true;

      var selecteds = [];
      angular.forEach($scope.items.data, function (item) {
        if (item.Selected) {
          selecteds.push(item.id);
        }
      });

      if (selecteds.length > 0) {
        ClientAPIService.getDelete('pagina/delete', selecteds).success(function (data, status) {
          $scope.itemsSelectedAll = false;
          $scope.message = data.data;

          list($scope.items.current_page);
        });
      }
      $scope.loadList = false;
    });
  };

  $scope.save = function (entity) {
    $scope.loadForm = true;

    if (entity.id) {
      ClientAPIService.getPut('pagina/atualizar/' + entity.id, entity)
        .success(function (data, status) {
          $scope.message = data.data;

          $scope.entity = {};

          $scope.edit(false);

          $scope.loadForm = false;
        })
        .error(function (data, status) {
          if (status == 422) {
            $scope.errors = data;

            $scope.loadForm = false;
          }
        });
      return;
    }
    ClientAPIService.getPost('pagina/salvar', entity)
      .success(function (data, status) {

        entity.id = data.id;

        $scope.message = data.data;

        $scope.items.data.unshift(entity);

        $scope.edit(false);

        $scope.entity = {};

        $scope.loadForm = false;
      })
      .error(function (data, status) {
        if (status == 422) {
          $scope.errors = data;

          $scope.loadForm = false;
        }
      });
    return;
  };
};