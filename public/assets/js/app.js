'use strict';

/* App Module */

var FreeStyle = angular.module('Freestyle', []);
/* No conflict with name spaces Laravel "{{ }}" and Angular "{{ }}" */
Cook.config(function($interpolateProvider) {
  $interpolateProvider.startSymbol('<%');
  $interpolateProvider.endSymbol('%>');
});