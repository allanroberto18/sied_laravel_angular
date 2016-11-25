require('angular');
require('angular-ui-bootstrap');
require('angular-utils-pagination');
require('angular-animate');
require('angular-sanitize');
require('angular-route');
require('./locale/angular-locale_pt-br');

var configValue = require('./config/configValue');
var alertMsg = require('./directives/alertMsg');
var ClientAPIService = require('./services/ClientAPIService');
var ModalService = require('./services/ModalService');
var SobreNosController = require('./controllers/SobreNosController');
var PaginaController = require('./controllers/PaginaController');
var PaginaCaracteristicaController = require('./controllers/PaginaCaracteristicaController');
var PaginaGaleriaController = require('./controllers/PaginaGaleriaController');
var PaginaVideoController = require('./controllers/PaginaVideoController');
var PaginaGaleriaFotoController = require('./controllers/PaginaGaleriaFotoController');
var VideoController = require('./controllers/VideoController');
var FaleConoscoController = require('./controllers/FaleConoscoController');
var FaleConoscoAssuntoController = require('./controllers/FaleConoscoAssuntoController');
var DepoimentoController = require('./controllers/DepoimentoController');

angular.module('app', ['angularUtils.directives.dirPagination', 'ngSanitize', 'ngAnimate', 'ui.bootstrap', 'ngRoute']).config(
  function (paginationTemplateProvider) {
    paginationTemplateProvider.setPath('/js/app/templates/dirPagination.tpl.html');
  }
);
angular.module('app').value('configValue', configValue);
angular.module('app').directive('alertMsg', [alertMsg]);
angular.module('app').service('ClientAPIService', ['$http', 'configValue', ClientAPIService ]);
angular.module('app').controller('ModalService', ['$scope', '$uibModalInstance', 'title', 'message', 'entity', ModalService ]);
angular.module('app').controller('SobreNosController', ['$scope', '$log', '$uibModal', 'ClientAPIService', SobreNosController ]);
angular.module('app').controller('PaginaController', ['$scope', '$log', '$uibModal', 'ClientAPIService', PaginaController ]);
angular.module('app').controller('PaginaCaracteristicaController', ['$scope', '$log', '$uibModal', 'ClientAPIService', PaginaCaracteristicaController ]);
angular.module('app').controller('PaginaGaleriaController', ['$scope', '$log', '$uibModal', 'ClientAPIService', PaginaGaleriaController ]);
angular.module('app').controller('PaginaGaleriaFotoController', ['$scope', '$log', '$uibModal', 'ClientAPIService', PaginaGaleriaFotoController ]);
angular.module('app').controller('VideoController', ['$scope', '$log', '$uibModal', 'ClientAPIService', VideoController ]);
angular.module('app').controller('FaleConoscoController', ['$scope', '$log', '$uibModal', 'ClientAPIService', FaleConoscoController ]);
angular.module('app').controller('FaleConoscoAssuntoController', ['$scope', '$log', '$uibModal', 'ClientAPIService', FaleConoscoAssuntoController ]);
angular.module('app').controller('DepoimentoController', ['$scope', '$log', '$uibModal', 'ClientAPIService', DepoimentoController ]);



