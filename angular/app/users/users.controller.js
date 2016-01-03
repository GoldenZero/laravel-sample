(function(){
    "use strict";

    angular.module('app.controllers').controller('UsersCtrl', UsersCtrl);

    function UsersCtrl($scope, API, DialogService, ToastService){
        API.all('users').doGET().then(function (response) {
            $scope.users = response.data;
        });

        $scope.addItem=function(event){
            DialogService.fromTemplate('user_edit', $scope);
        }
    }

})();
