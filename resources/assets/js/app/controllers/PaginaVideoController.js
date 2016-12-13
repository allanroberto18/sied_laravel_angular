module.exports = function ($scope, $log, $uibModal, ClientAPIService, ImageService) {

  $scope.modulo = {
    title: 'Gerenciar Módulo',
    subtitle: 'Video da Página'
  };

  $scope.title = '';
  $scope.column = 'col-xs-12 col-sm-12 col-md-12 col-lg-12';
  $scope.loadList = '';
  $scope.showForm = false;
  $scope.loadForm = false;

  $scope.items = {};
  $scope.itemsSelectedAll = false;

  $scope.errors = '';
  $scope.message = '';

  $scope.token = '';
  $scope.pagina = '';
  $scope.entity = {};
  $scope.animationsEnabled = true;

  $scope.pageChanged = function (page) {
    list(page);
  };

  var list = function (page) {
    $scope.loadList = true;
    ClientAPIService.getLoad('pagina/video/' + $scope.pagina)
      .then(function (result) {
        $scope.items = result.data;
      })
    $scope.loadList = false;
  };

  $scope.init = function (pagina) {
    $scope.pagina = pagina;
    list();
  }

  $scope.getToken = function () {
    ClientAPIService.getToken()
      .success(function (data, status) {
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

      return;
    }
    $scope.imagem = '';
  };

  $scope.new = function () {
    $scope.title = 'Novo Registro';

    $scope.edit(true);

    $scope.entity = {
      pagina_id: $scope.pagina,
      url: '',
      largura: '',
      altura: '',
    };
  };

  $scope.load = function (entity) {
    $scope.title = 'Alterar Registro #' + entity.id;

    $scope.entity = entity;

    $scope.edit(true);

    $scope.imagem = entity.imagem;
  };

  $scope.closeMessage = function () {
    $scope.message = '';
  }

  $scope.cancel = function (form) {
    if (form) {
      form.$setPristine();
      form.$setUntouched();
    }
    $scope.entity = {};
    $scope.errors = '';
  };

  $scope.close = function (form) {
    $scope.cancel(form);

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
    var modulo = 'pagina/video/delete/';

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
      var selected = [];
      selected.push(entity.id);
      ClientAPIService.getDelete(modulo, selected)
        .success(function (data) {
          $scope.loadList = true;

          $scope.message = data.data;
          $scope.items.data.splice(key, 1);

          $scope.loadList = false;

          if ($scope.items.data.length == 0) {
            list($scope.items.data.meta.pagination.current_page);
          }

          $scope.entity = {};
        })
        .error(function (data, status) {
          if (status == 422) {
            $scope.errors = data.data;
          }
        });
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

      var selecteds = [];
      angular.forEach($scope.items.data, function (item) {
        if (item.Selected) {
          selecteds.push(item.id);
        }
      });

      if (selecteds.length > 0) {
        ClientAPIService.getDelete('pagina/video/delete', selecteds)
          .success(function (data, status) {
            $scope.itemsSelectedAll = false;
            $scope.message = data.data;

            list($scope.items.data.meta.pagination.current_page);
          });
      }
    });
  };

  $scope.save = function (entity) {
    $scope.loadForm = true;

    if (entity.id) {
      ClientAPIService.getPut('pagina/video/atualizar/' + entity.id, entity)
        .success(function (data, status) {
          $scope.message = data.data;

          $scope.entity = {};

          $scope.edit(false);
        })
        .error(function (data, status) {
          if (status == 422) {
            $scope.errors = data;
          }
        });
      $scope.loadForm = false;
      return;
    }

    ClientAPIService.getPost('pagina/video/salvar', entity)
      .success(function (data, status) {
        entity.id = data.id;

        $scope.message = data.data;

        $scope.items.data.unshift(entity);

        $scope.edit(false);

        $scope.entity = {};
      })
      .error(function (data, status) {
        if (status == 422) {
          $scope.errors = data;
        }
      });
    $scope.loadForm = false;
    return;
  };
};