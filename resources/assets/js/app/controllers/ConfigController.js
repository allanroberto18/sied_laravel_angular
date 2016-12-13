module.exports = function ($scope, $log, $uibModal, ClientAPIService, ImageService, $http) {

  $scope.modulo = {
    title: 'Gerenciar Módulo',
    subtitle: 'Configurações do Site'
  };

  $scope.title = '';
  $scope.column = 'col-xs-12 col-sm-12 col-md-12 col-lg-12';
  $scope.loadList = '';
  $scope.showForm = false;
  $scope.loadForm = false;

  $scope.items = {};
  $scope.total = 0;
  $scope.perPage = 10;
  $scope.configtion = {
    current: 1
  };

  $scope.itemsSelectedAll = false;

  $scope.errors = '';
  $scope.message = '';

  $scope.token = '';
  $scope.imagem = '';
  $scope.entity = {};
  $scope.animationsEnabled = true;

  $scope.pageChanged = function (page) {
    list(page);
  };

  var list = function (page) {
    $scope.loadList = true;
    ClientAPIService.getList('config', page)
      .then(function (result) {
        $scope.items = result.data;

        $scope.total = result.data.meta.pagination.total;
      })
    $scope.loadList = false;
  };

  $scope.init = function () {
    list(1);
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
      nome: '',
      telefone: '',
      email: '',
      cep: '',
      logradouro: '',
      complemento: '',
      numero: '',
      bairro: '',
      localidade: '',
      uf: '',
      logo: '',
      status: 1
    };
  };

  $scope.load = function (entity) {
    $scope.title = 'Alterar Registro #' + entity.id;

    $scope.entity = entity;

    $scope.edit(true);

    $scope.imagem = entity.logo;
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
    var modulo = 'config/delete/';

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
          return 'Deseja alterar o status da configuração #' + entity.id;
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

          $scope.items.data[key].status = data.status;

          $scope.message = data.data;

          $scope.loadList = false;

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
        ClientAPIService.getDelete('config/delete', selecteds)
          .success(function (data, status) {
            $scope.itemsSelectedAll = false;
            $scope.message = data.data;

            list($scope.items.data.meta.configtion.current_page);
          });
      }
    });
  };

  $scope.save = function (entity) {
    $scope.loadForm = true;

    entity.logo = $scope.imagem;

    if (entity.id) {
      ClientAPIService.getPut('config/atualizar/' + entity.id, entity)
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

    ClientAPIService.getPost('config/salvar', entity)
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

  $scope.upload = function (imagem) {
    var fd = new FormData();
    fd.append('file', imagem[0]);

    ImageService.post(fd, 'config/upload')
      .then(function (data) {
        $scope.imagem = data.data;
      });
  }

  $scope.getCep = function (value) {

    $http.get('https://viacep.com.br/ws/' + value + '/json/')
      .then(function (result, status) {
        $scope.entity.cep = result.data.cep;
        $scope.entity.logradouro = result.data.logradouro;
        $scope.entity.complemento = result.data.complemento;
        $scope.entity.bairro = result.data.bairro;
        $scope.entity.localidade = result.data.localidade;
        $scope.entity.uf = result.data.uf;
      });
  }
};