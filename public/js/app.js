var portfolio = angular.module('portfolio', [
    'ngRoute',
    'ui.bootstrap',
    'anchorScrollOffset'
]).run(['$anchorScroll', function($anchorScroll) {
        $anchorScroll.yOffset = 50;   // always scroll by 50 extra pixels
    }]);

portfolio.controller("PortfolioCtrl", ['$scope', function($scope) {
        $scope.name = "kg-portfolio";
    }]);

portfolio.controller('CollapseCtrl', function($scope) {
    $scope.isCollapsed = false;
});

portfolio.controller('DropdownCtrl', function($scope, $log) {
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
});

portfolio.controller('navBarCtrl', ['$anchorScroll', '$location', '$scope',
    function($anchorScroll, $location, $scope) {
        $scope.gotoAnchor = function(x) {
            var newHash = 'anchor-' + x;
            if ($location.hash() !== newHash) {
                // set the $location.hash to `newHash` and
                // $anchorScroll will automatically scroll to it
                $location.hash('anchor-' + x);
            } else {
                // call $anchorScroll() explicitly,
                // since $location.hash hasn't changed
                $anchorScroll();
            }
        };
    }
]);


