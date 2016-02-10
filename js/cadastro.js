angular.module('MyApp', ['ngMaterial', 'ngMessages', 'material.svgAssetsCache'])

    .controller('AppCtrl', function ($scope) {
        $scope.imagePath = 'img/washedout.png';
    });

angular.module('inputErrorsApp', ['ngMaterial', 'ngMessages'])
    .controller('AppCtrl', function ($scope) {
        $scope.project = {
            description: 'Nuclear Missile Defense System',
            rate: 5000
        };
    });