(function(){
    "use strict";

    angular.module('app.controllers').controller('UsersCtrl', UsersCtrl);

    function UsersCtrl($scope, API, ToastService){
        API.all('users').doGET().then(function (response) {
            $scope.users = response.data;
        });
    }

})();
