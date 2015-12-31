(function () {
    "use strict";

    angular.module('app.routes').config(function ($stateProvider, $urlRouterProvider) {

        var getView = function (viewName) {
            return './views/app/' + viewName + '/' + viewName + '.html';
        };

        $urlRouterProvider.otherwise('/');

        $stateProvider
            .state('app', {
                abstract: true,
                views: {
                    sidebar: {
                        templateUrl: getView('sidebar')
                    },
                    header: {
                        templateUrl: getView('header')
                    },
                    main: {}
                }
            })
            .state('app.users', {
                url: '/users',
                data:{pageName: 'Users'},
                views:{
                    'main@':{
                        templateUrl: getView('users')
                    }
                }
            });
    });
})();
