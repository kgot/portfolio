describe('Directive:', function() {

  beforeEach(angular.mock.module('portfolio'));

  describe('template', function() {
    var $compile;
    var $scope;
    var $httpBackend;

    // Load the templates module
    beforeEach(module('templates'));

    // Angular strips the underscores when injecting
    beforeEach(inject(function(_$compile_, _$rootScope_) {
      $compile = _$compile_;
      $scope = _$rootScope_.$new();
    }));

    it('should render the header and text as passed in by $scope',
      inject(function() {
        // $compile the template, and pass in the $scope.
        // This will find your directive and run everything
        var template = $compile('<profcard></profcard>')($scope);

        // Set some values on your $scope
        $scope.header = 'This is a header';
        $scope.text = 'Lorem Ipsum';

        // Now run a $digest cycle to update your template with new data
        $scope.$digest();

        // Render the template as a string
        var templateAsHtml = template.html();

        // Verify that the $scope variables are in the template
        expect(templateAsHtml).toContain($scope.header);
        expect(templateAsHtml).toContain($scope.text);

        // Do it again with new values
        var previousHeader = $scope.header;
        var previousText = $scope.text;
        $scope.header = 'A completely different header';
        $scope.text = 'Something completely different';

        // Run the $digest cycle again
        $scope.$digest();

        templateAsHtml = template.html();

        expect(templateAsHtml).toContain($scope.header);
        expect(templateAsHtml).toContain($scope.text);
        expect(templateAsHtml).toNotContain(previousHeader);
        expect(templateAsHtml).toNotContain(previousText);
      }));
  });
});
