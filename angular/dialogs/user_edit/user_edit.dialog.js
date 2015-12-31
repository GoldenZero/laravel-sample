(function(){
    "use strict";

    angular.module('app.controllers').controller('UserEditCtrl', UserEditCtrl);


    function UserEditCtrl(DialogService){

        this.save = function(){
            //
        };

        this.hide = function(){
          	DialogService.hide();
        };

    }

})();
