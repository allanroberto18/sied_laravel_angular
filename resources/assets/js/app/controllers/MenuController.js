module.exports = function ($scope, $location) {
    $scope.isActive = function (viewLocation) {
        return viewLocation === $location.path();
    };

    $scope.go = function (path) {
        $location.path(path);
    };
}
