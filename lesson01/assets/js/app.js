(function(){
	'use strict'
	var app = angular.module('gettingStart',[]);
	app.controller('StoreController',function(){
		this.product = {
			product_name: 'PSP VISTA',
			price : 5500,
			description : 'Sony'
		};
	});
})();