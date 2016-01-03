(function(){
    "use strict";

    angular.module('app.controllers').controller('UserEditCtrl', UserEditCtrl);


    function UserEditCtrl($scope, API, DialogService, ToastService){

        this.save = function(){
            console.log($scope);
            API.all('users').post($scope.user).then(function(response){
                console.log(response);
            });
        };

        this.hide = function(){
          	DialogService.hide();
        };
    }

})();
