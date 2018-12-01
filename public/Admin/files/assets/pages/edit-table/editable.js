  'use strict';
 $(document).ready(function() {
    $('#example-2').Tabledit({

        columns: {

          identifier: [0, 'id'],

          editable: [[1, 'Name'], [2, 'Type'],
              [3, 'Technical Description'], [4, 'Description'],
              [5, 'Price'], [6, 'Sale'],
              [7, 'Image'],[8,'Available']
          ]

      }

  });
});

