var Tier27 = angular.module('Tier27',[]);

Tier27.controller('AppController', ['$scope', function($scope) {
  $scope.slogan = 'Web Applications for the Masses'
  $scope.tagline = 'Your vision is just months away'
  $scope.sections = [
    {name: 'services'},
    {name: 'process'},
    {name: 'team'},
    {name: 'projects'},
  ]

  $(".nav-toggle").click(function() {
      $(this).toggleClass("active");
      $(".overlay-nav").toggleClass("open")
  });
  $(".overlay ul li a").click(function() {
      $(".nav-toggle").toggleClass("active");
      $(".overlay-nav").toggleClass("open")
  });
  $(".overlay").click(function() {
      $(".nav-toggle").toggleClass("active");
      $(".overlay-nav").toggleClass("open")
  });
  $("a[href*=#]:not([href=#])").click(function() {
      if (location.pathname.replace(/^\//, "") === this.pathname.replace(/^\//, "") && location.hostname === this.hostname) {
          var e = $(this.hash);
          e = e.length ? e : $("[name=" + this.hash.slice(1) + "]");
          if (e.length) {
              $("html,body").animate({
                  scrollTop: e.offset().top
              }, 1e3);
              return false
          }
      }
  })

  function chunk(arr, size) {
    var newArr = [];
    for (var i=0; i<arr.length; i+=size) {
      newArr.push(arr.slice(i, i+size));
    }
    return newArr;
  }
  
  $scope.menu = chunk($scope.sections, 2);
  console.log($scope.menu)
}]);

Tier27.controller('TeamController', ['$scope', function($scope) {
  console.log('here');
  $("#teamSlider").flickity({
      cellAlign: "left",
      contain: true,
      prevNextButtons: true,
      autoPlay: true
  });

  $scope.double = function(value) { return value * 2; };
}]);

Tier27.controller('ProcessController', ['$scope', function($scope) {
  $(document).ready(function(){
      var my_posts = $("[rel=tooltip]");
  
      var size = $(window).width();
      for(i=0;i<my_posts.length;i++){
          the_post = $(my_posts[i]);
  
          if(the_post.hasClass('invert') && size >=767 ){
              the_post.tooltip({ placement: 'left'});
              the_post.css("cursor","pointer");
          }else{
              the_post.tooltip({ placement: 'rigth'});
              the_post.css("cursor","pointer");
          }
      }
  });
}]);

Tier27.controller('WorkController', ['$scope', function($scope) {
}]);
