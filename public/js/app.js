(function() {

  var topAnchor = document.getElementById('top-anchor');

  var portfolio = angular.module('portfolio', [
    'ngRoute',
    'ngResource',
    'ngAnimate',
    'smoothScroll'
  ]);

  portfolio.run(['$templateCache', function($templateCache) {
    $templateCache.put('templates/profcard.html');
  }]);

  portfolio.controller('PortfolioCtrl', ['$scope', function($scope) {
    $scope.name = 'kg-portfolio';
  }]);

  portfolio.controller('CollapseCtrl', ['$scope', function($scope) {
    $scope.isCollapsed = false;
  }]);

  portfolio.controller('DropdownCtrl', ['$scope', '$log', function($scope, $log) {
    $scope.sections = [
      'Headings',
      'Interests',
      'GitHub',
      'Creativity',
      'More'
    ];

    $scope.status = {
      isopen: false
    };

    $scope.toggled = function(open) {
      $log.log('Dropdown is now: ', open);
    };

    $scope.toggleDropdown = function($event) {
      $event.preventDefault();
      $event.stopPropagation();
      $scope.status.isopen = !$scope.status.isopen;
    };
  }]);

  portfolio.controller('ScrollBtnCtrl', ['smoothScroll', '$scope', function(smoothScroll, $scope) {
    $scope.scrollToTop = function() {
      smoothScroll(topAnchor);
    };
  }]);

  portfolio.controller('NavBarCtrl', ['$scope', function($scope) {

  }]);

  portfolio.controller('CardDirCtrl', function() {
    this.title = {
      text: 'Professional Card'
    };

    this.content = {
      shown: false,
      text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.' +
        'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
        show: function() {
          this.shown = true;
        },
        hide: function() {
          this.shown = false;
        }
    };

    this.image = {
      blurred: false,
      restore: function() {
        this.blurred = false;
      },
      blur: function() {
        this.blurred = true;
      }
    };
  });

  portfolio.directive('card', function() {
    return {
      restrict: 'E',
      scope: {},
      replace: true,
      transclude: true,
      templateUrl: 'templates/profcard.html',
      controller: 'CardDirCtrl',
      controllerAs: 'card',
      bindToController: {
        title: '@',
        content: '@',
        image: '@'
      },
      link: function(scope, element, attr) {

        element.on('mousedown', function(event) {
          // Prevent default dragging of selected content
          event.preventDefault();
          // TODO on click action
        });

        element.on('mouseover', function(event) {
          // Prevent default dragging of selected content
          event.preventDefault();
          scope.card.blurImage();
          scope.card.showContent();
        });

        element.on('mouseout', function(event) {
          event.preventDefault();
          scope.card.restoreImage();
          scope.card.hideContent();
        });
      }
    };
  });

})();
