'use strict';

(function($){

  $(function() {

      var datascource = {
          'name': ' Rodrigo Oyanedel ',
          'title': ' Presidente ejecutivo ',
            'children':
                [
                  {
                    'name': ' Rafael Velasco','title': ' Gerente general ',
                      'children':
                          [
                              {'name': ' Rodrigo Guzmán ', 'title': ' Gerente comercial                 '},
                              {'name': ' Patricio Vázquez ', 'title': ' Gerente licores                 '},
                              {'name': ' Diego Yurjevic ', 'title': ' Subgerente vinos                  '},
                              { 'name': ' Francisco Yáñez', 'title': ' Gerente licores '                },
                              { 'name': ' Roger Muñoz ', 'title': ' Área de Cervezas '                  },
                              { 'name': ' Victor Díaz ', 'title': ' SubGerente Adm .y Finanzas '        },
                              { 'name': ' Alejandro Retamal ', 'title': ' SubGerente Operaciones '      },
                              { 'name': ' Daniella Galli ', 'title': ' Jefe de RRHH '                   },
                          ]
                  }
                ]
      };

    var datascourcee = {
      'name': ' Rodrigo Oyanedel ',
      'title': ' Presidente ejecutivo ',
      'children': [
        { 'name': 'Bo Miao', 'title': 'department manager',
          'children': [{ 'name': 'Li Xin', 'title': 'senior engineer' }]
        },
        { 'name': 'Su Miao', 'title': 'department manager',
          'children': [
            { 'name': 'Tie Hua', 'title': 'senior engineer' },
            { 'name': 'Hei Hei', 'title': 'senior engineer',
              'children': [
                { 'name': 'Pang Pang', 'title': 'engineer' },
                { 'name': 'Xiang Xiang', 'title': 'UE engineer' }
              ]
            }
          ]
        },
        { 'name': 'Hong Miao', 'title': 'department manager' },
        { 'name': 'Chun Miao', 'title': 'department manager' }
      ]
    };

    $('#chart-container').orgchart({
      'data' : datascource,
      'nodeContent': 'title',
      'draggable': true,
      'dropCriteria': function($draggedNode, $dragZone, $dropZone) {
        if($draggedNode.find('.content').text().indexOf('manager') > -1 && $dropZone.find('.content').text().indexOf('engineer') > -1) {
          return false;
        }
        return true;
      }
    })
    .children('.orgchart').on('nodedropped.orgchart', function(event) {
      console.log('draggedNode:' + event.draggedNode.children('.title').text()
        + ', dragZone:' + event.dragZone.children('.title').text()
        + ', dropZone:' + event.dropZone.children('.title').text()
      );
    });

  });

})(jQuery);