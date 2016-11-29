require('angular');
require('angular-ui-bootstrap');
require('angular-utils-pagination');
require('angular-animate');
require('angular-sanitize');
require('angular-route');
require('./locale/angular-locale_pt-br');

var configValue = require('./config/configValue');
var alertMsg = require('./directives/alertMsg');
var ImageService = require('./services/ImageService');
var ClientAPIService = require('./services/ClientAPIService');
var ModalService = require('./services/ModalService');
var MenuController = require('./controllers/MenuController');
var DashboardController = require('./controllers/DashboardController');
var PaginaController = require('./controllers/PaginaController');
var SobreNosController = require('./controllers/SobreNosController');

angular.module('app', [
  'angularUtils.directives.dirPagination',
  'ngSanitize',
  'ngAnimate',
  'ui.bootstrap',
  'ngRoute'
]).config(
  function (paginationTemplateProvider) {
    paginationTemplateProvider.setPath('/js/app/templates/dirPagination.tpl.html');
  }
);

angular.module('app').config(function ($routeProvider) {
  $routeProvider
    .when("/", {
      templateUrl: "/js/app/templates/dashboard/index.tpl.html"
    })
    .when("/pagina", {
      templateUrl: "/js/app/templates/pagina/index.tpl.html"
    })
    .when("/sobre_nos", {
      templateUrl: "/js/app/templates/sobre_nos/index.tpl.html"
    });
});
angular.module('app').value('configValue', configValue);
angular.module('app').directive('alertMsg', [alertMsg]);
angular.module('app').service('ImageService', ['$http', 'configValue', ImageService]);
angular.module('app').service('ClientAPIService', ['$http', 'configValue', ClientAPIService]);
angular.module('app').controller('ModalService', ['$scope', '$uibModalInstance', 'title', 'message', 'entity', ModalService]);
angular.module('app').controller('MenuController', ['$scope', '$location', MenuController]);
angular.module('app').controller('DashboardController', ['$scope', '$log', '$uibModal', 'ClientAPIService', DashboardController]);
angular.module('app').controller('PaginaController', ['$scope', '$log', '$uibModal', 'ClientAPIService', 'ImageService', PaginaController]);
angular.module('app').controller('SobreNosController', ['$scope', '$log', '$uibModal', 'ClientAPIService', SobreNosController]);



