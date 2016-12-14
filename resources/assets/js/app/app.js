require('angular');
require('angular-ui-bootstrap');
require('angular-utils-pagination');
require('angular-animate');
require('angular-sanitize');
require('angular-route');
require('angular-youtube-embed');
require('angular-input-masks');
require('./locale/angular-locale_pt-br');

var configValue = require('./config/configValue');
var alertMsg = require('./directives/alertMsg');
var telefone = require('./directives/telefone');
var cep = require('./directives/cep');
var passwordVerify = require('./directives/passwordVerify');
var ImageService = require('./services/ImageService');
var ClientAPIService = require('./services/ClientAPIService');
var ModalService = require('./services/ModalService');
var MenuController = require('./controllers/MenuController');
var DashboardController = require('./controllers/DashboardController');
var PaginaController = require('./controllers/PaginaController');
var PaginaCaracteristicaController = require('./controllers/PaginaCaracteristicaController');
var PaginaVideoController = require('./controllers/PaginaVideoController');
var BannerController = require('./controllers/BannerController');
var SobreNosController = require('./controllers/SobreNosController');
var VideoController = require('./controllers/VideoController');
var FaleConoscoController = require('./controllers/FaleConoscoController');
var ConfigController = require('./controllers/ConfigController');

angular.module('app', [
    'angularUtils.directives.dirPagination',
    'ngSanitize',
    'ngAnimate',
    'ui.bootstrap',
    'ngRoute',
    'youtube-embed',
    'ui.utils.masks'
]).config(
    function (paginationTemplateProvider) {
        paginationTemplateProvider.setPath('/js/app/templates/dirPagination.tpl.html');
    }
);

angular.module('app').config(function ($routeProvider) {
    $routeProvider
        .when("/", {
            templateUrl: "/js/app/templates/dashboard/index.tpl.html",
            resolve: {
                // I will cause a 1 second delay
                delay: function ($q, $timeout) {
                    var delay = $q.defer();
                    $timeout(delay.resolve, 1000);
                    return delay.promise;
                }
            }
        })
        .when("/config", {
            templateUrl: "/js/app/templates/config/index.tpl.html",
            resolve: {
                // I will cause a 1 second delay
                delay: function ($q, $timeout) {
                    var delay = $q.defer();
                    $timeout(delay.resolve, 1000);
                    return delay.promise;
                }
            }
        })
        .when("/contato", {
            templateUrl: "/js/app/templates/contato/index.tpl.html",
            resolve: {
                // I will cause a 1 second delay
                delay: function ($q, $timeout) {
                    var delay = $q.defer();
                    $timeout(delay.resolve, 1000);
                    return delay.promise;
                }
            }
        })
        .when("/pagina", {
            templateUrl: "/js/app/templates/pagina/index.tpl.html",
            resolve: {
                // I will cause a 1 second delay
                delay: function ($q, $timeout) {
                    var delay = $q.defer();
                    $timeout(delay.resolve, 1000);
                    return delay.promise;
                }
            }
        })
        .when("/sobre_nos", {
            templateUrl: "/js/app/templates/sobre_nos/index.tpl.html",
            resolve: {
                // I will cause a 1 second delay
                delay: function ($q, $timeout) {
                    var delay = $q.defer();
                    $timeout(delay.resolve, 1000);
                    return delay.promise;
                }
            }
        })
        .when("/video", {
            templateUrl: "/js/app/templates/video/index.tpl.html",
            resolve: {
                // I will cause a 1 second delay
                delay: function ($q, $timeout) {
                    var delay = $q.defer();
                    $timeout(delay.resolve, 1000);
                    return delay.promise;
                }
            }
        })
    ;
});

angular.module('app').value('configValue', configValue);
angular.module('app').directive('alertMsg', [alertMsg]);
angular.module('app').directive('telefone', [telefone]);
angular.module('app').directive('cep', [cep]);
angular.module('app').directive('passwordVerify', [passwordVerify]);
angular.module('app').service('ImageService', ['$http', 'configValue', ImageService]);
angular.module('app').service('ClientAPIService', ['$http', 'configValue', ClientAPIService]);
angular.module('app').controller('ModalService', ['$scope', '$uibModalInstance', 'title', 'message', 'entity', ModalService]);
angular.module('app').controller('MenuController', ['$scope', '$location', MenuController]);
angular.module('app').controller('DashboardController', ['$scope', '$log', '$uibModal', 'ClientAPIService', DashboardController]);
angular.module('app').controller('PaginaController', ['$scope', '$log', '$uibModal', 'ClientAPIService', 'ImageService', PaginaController]);
angular.module('app').controller('PaginaCaracteristicaController', ['$scope', '$log', '$uibModal', 'ClientAPIService', PaginaCaracteristicaController]);
angular.module('app').controller('PaginaVideoController', ['$scope', '$log', '$uibModal', 'ClientAPIService', PaginaVideoController]);
angular.module('app').controller('BannerController', ['$scope', '$log', '$uibModal', 'ClientAPIService', 'ImageService', BannerController]);
angular.module('app').controller('SobreNosController', ['$scope', '$log', '$uibModal', 'ClientAPIService', SobreNosController]);
angular.module('app').controller('VideoController', ['$scope', '$log', '$uibModal', 'ClientAPIService', VideoController]);
angular.module('app').controller('FaleConoscoController', ['$scope', '$log', '$uibModal', 'ClientAPIService', FaleConoscoController]);
angular.module('app').controller('ConfigController', ['$scope', '$log', '$uibModal', 'ClientAPIService', 'ImageService', '$http', ConfigController]);



