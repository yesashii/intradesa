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
                              {
                                'name': ' Rodrigo Guzmán ', 'title': ' Gerente comercial ',
                                  'children':
                                      [
                                          {
                                            'name': 'Carlos Valdebenito	', 'title': 'Jefe Sucursal Viña del Mar	 ',
                                              'children':
                                                  [
                                                      { 'name': 'Marcela Lazcano	', 'title': 'Administrativa Sucursal	' },
                                                      { 'name': 'Cristopher Gatica	', 'title': 'Auxiliar Administrativo 	' },
                                                      { 'name': 'Jorge Soto Casas	', 'title': 'Encargado Bodega        	' },
                                                      { 'name': 'Flavio Zamorano	', 'title': 'Bodeguero               	' },
                                                      { 'name': 'Marcos Araneda		', 'title': 'Bodeguero               	' },
                                                      { 'name': 'Rafael Olivares	', 'title': 'Vendedor                	' },
                                                      { 'name': 'Rodrigo Lopez		', 'title': 'Vendedor                	' },
                                                      { 'name': 'Mario Lazcano		', 'title': 'Vendedor                	' },
                                                      { 'name': 'Sebastian Sandoval	', 'title': 'Vendedor                	' },
                                                      { 'name': 'Christian Adam		', 'title': 'Vendedor                	' },
                                                      { 'name': 'Daniel Muñoz C.	', 'title': 'Supervisor Gestores     	' },
                                                  ]
                                          },
                                          {
                                            'name': 'Juan Pablo Orellana 	', 'title': 'Jefe Ventas Curicó      ',
                                              'children':
                                                  [
                                                      { 'name': 'Patricia Rojas		', 'title': 'Administrativa Sucursal	' },
                                                      { 'name': 'Sergio Chihuailaf	', 'title': 'Bodeguero               	' },
                                                      { 'name': 'Ricardo Cabezas		', 'title': 'Vendedor Talca         ' },
                                                      { 'name': 'Rodrigo Morán		', 'title': 'Vendedor Sta Cruz       	' },
                                                      { 'name': 'Carlos Muñoz			', 'title': 'Vendedor Curicó        ' },
                                                  ]
                                          },
                                          {
                                            'name': 'Claudio Díaz 		', 'title': 'Jefe Ventas Concepción      ',
                                              'children':
                                                  [
                                                      { 'name': 'Paulo Sierra	  ', 'title': 'Administrativo Sucursal	' },
                                                      { 'name': 'Jaime Rivas	  ', 'title': 'Bodeguero               	' },
                                                      { 'name': 'Arturo García	  ', 'title': 'Bodeguero               	' },
                                                      { 'name': 'Alex Oliva		  ', 'title': 'Vendedor Concepción     	' },
                                                      { 'name': 'José Ramirez	  ', 'title': 'Vendedor Concepción     	' },
                                                      { 'name': 'Freddy Muñoz	  ', 'title': 'Vendedor Chillán        	' },
                                                      { 'name': 'Cesar Jorquera	  ', 'title': 'Vendedor Los Angeles    	' },
                                                      { 'name': 'Rodolfo Valencia ', 'title': 'Vendedor Concepción     	' },
                                                      { 'name': 'Jorge Gaete	  ', 'title': 'Vendedor Concepción     	' },
                                                  ]
                                          },
                                          {
                                            'name': 'Juan Carlos Concha', 'title': ' Jefe Sucursal Arica - Iquique ',
                                              'children':
                                                  [
                                                      { 'name': 'Patricia Garces', 'title': 'Administrativa Sucursal Iquique' 	},
                                                      { 'name': 'Arica / Iquique', 'title': 'Encargado Bodegas' 				},
                                                      { 'name': '', 'title': 'Administrativos' 									},
                                                      { 'name': '', 'title': 'Bodegueros / Ayudantes Bodega' 					},
                                                      { 'name': 'Patricio Saavedra', 'title': 'Vendedor Arica' 					},
                                                      { 'name': 'Daniel Ayala', 'title': 'Vendedor Arica' 						},
                                                      { 'name': 'Eduardo Olivares', 'title': 'Vendedor Iquique' 				},
                                                      { 'name': 'Jonathan Silva', 'title': 'Vendedor On Premise' 				},
                                                      { 'name': 'Luis Calderon', 'title': 'Vendedor' 							},
                                                      { 'name': 'Andrés Carroza', 'title': 'Vendedor' 							},
                                                      { 'name': 'Francisco Olivares', 'title': 'Vendedor' 						},
                                                      { 'name': 'Marcelo Alvarado', 'title': 'Vendedores Modulo' 				},
                                                      { 'name': 'Claudia Núñez', 'title': 'Vendedores Modulo' 					},
                                                      { 'name': 'Victor Benavides', 'title': 'Vendedores Modulo' 				},
                                                      { 'name': 'Omar Córdova', 'title': 'Vendedores Modulo' 					},
                                                      { 'name': 'Luis Donoso', 'title': 'Vendedores Modulo' 					},
                                                      { 'name': 'Johanna Zambrano', 'title': 'Vendedores Modulo' 				},
                                                  ]
                                          },
                                          {
                                            'name': 'Walter Varas', 'title': ' Jefe Sucursal Antofagasta ',
                                              'children':
                                                  [
                                                      { 'name': 'Cristian Balcázar', 'title': 'Jefe Administrativo 		' },
                                                      { 'name': 'Marcos Cores', 'title': 'Encargado Bodega 				' },
                                                      { 'name': 'Luisa Tabilo', 'title': 'Administrativa Sucursal		' },
                                                      { 'name': 'Yanitza Barraza', 'title': 'Administrativa Sucursal	' },
                                                      { 'name': '', 'title': 'Bodegueros/Ayudantes Bodega 				' },
                                                      { 'name': 'Pedro Gutierrez', 'title': 'Trade Marketing Zona Norte	' },
                                                      { 'name': 'Leonel Peralta', 'title': 'Vendedor Antofagasta		' },
                                                      { 'name': 'Carlos Zare', 'title': 'Vendedor Calama				' },
                                                      { 'name': 'Carlos Álvarez', 'title': 'Vendedor Calama				' },
                                                      { 'name': 'Luis Guzmán', 'title': 'Vendedor Antofagasta			' },
                                                      { 'name': 'Elba Melendez', 'title': 'Vendedor						' },
                                                      { 'name': 'Miguel Tapia', 'title': 'Vendedor						' },
                                                      { 'name': 'Juan Muñoz', 'title': 'Vendedor						' },
                                                      { 'name': 'Mariana Pizarro', 'title': 'Vendedora Calama			' },
                                                      { 'name': 'Carlos Echeverria', 'title': 'Vendedor					' },
                                                      { 'name': 'Jonathan Gutierrez', 'title': 'Vendedor				' },
                                                      { 'name': 'Jonathan Gutierrez', 'title': 'Vendedor				' },
                                                  ]
                                          },
                                          {
                                            'name': 'David Lavanderos', 'title': ' Jefe Sucursal Copiapó / La Serena',
                                              'children':
                                                  [
                                                      { 'name': 'Rodrigo Gallardo	', 'title': 'Administrativo Sucursal La Serena ' },
                                                      { 'name': 'Sergio Ríos 		', 'title': 'Asist. Administrativo/Bodega      ' },
                                                      { 'name': 'Francisco Silva	', 'title': 'Bodeguero                         ' },
                                                      { 'name': 'Johan Rivera		', 'title': 'Bodeguero                         ' },
                                                      { 'name': 'Patricia Alaniz	', 'title': 'Administrativo Sucursal Copiapó   ' },
                                                      { 'name': 'Marcelo Garrido	', 'title': 'Asist. Administrativo /Bodega     ' },
                                                      { 'name': 'Eduardo Varas		', 'title': 'Asist. Administrativo /Bodega     ' },
                                                      { 'name': 'Eduardo Aguilar	', 'title': 'Bodegueros/Operadores             ' },
                                                      { 'name': 'Michel Domínguez   ', 'title': 'Bodegueros/Operadores             ' },
                                                      { 'name': 'Gabriel Barahona   ', 'title': 'Bodegueros/Operadores             ' },
                                                      { 'name': 'Héctor Dubo		', 'title': 'Supervisor de Ventas Copiapó      ' },
                                                      { 'name': 'Ricardo Salinas	', 'title': 'Vendedor La Serena                ' },
                                                      { 'name': 'José Miguel Muñoz	', 'title': 'Vendedor La Serena                ' },
                                                      { 'name': 'José Retamal		', 'title': 'Vendedor La Serena		           ' },
                                                      { 'name': 'Luis Muñoz I.		', 'title': 'Vendedor Copiapó Supermercados    ' },
                                                      { 'name': 'Luis González G	', 'title': 'Vendedor Copiapó                  ' },
                                                      { 'name': 'Luis González J.	', 'title': 'Vendedor Copiapó                  ' },
                                                  ]
                                          },
                                          {
                                              'name': 'Raúl Ormazabal', 'title': ' Jefe de ventas ',
                                              'children':
                                                  [
                                                      { 'name': 'Carlos Clark', 'title': 'Vendedores Santiago' 		},
                                                      { 'name': 'Yasna Arias', 'title': 'Vendedores Santiago' 		},
                                                      { 'name': 'Horacio Sepúlveda', 'title': 'Vendedores Santiago' 	},
                                                      { 'name': 'Branda Jaramillo', 'title': 'Vendedores Santiago' 	},
                                                      { 'name': 'Marcelo Rubio', 'title': 'Vendedores Santiago' 		},
                                                      { 'name': 'Aldo López', 'title': 'Vendedores Santiago' 			},
                                                      { 'name': 'Carolina Aravena', 'title': 'Vendedores Santiago' 	},
                                                      { 'name': 'Andrea Lira', 'title': 'Vendedores Santiago' 		},
                                                      { 'name': 'Luis Mondaca', 'title': 'Vendedores Santiago' 		},
                                                      { 'name': 'Mauricio Guajardo', 'title': 'Vendedores Santiago' 	},
                                                      { 'name': 'Pedro Morales', 'title': 'KAM ON PREMISE'            },
                                                      { 'name': 'Pablo Sánchez', 'title': 'KAM VI Región'             },
                                                      { 'name': 'Marcelo Martínez', 'title': 'Vendedor Los Andes'     },
                                                  ]
                                          },
                                                { 'name': 'Fernando Echeverría', 'title': ' KAM supermercados '     },
                                                { 'name': 'Angelica Arancibia', 'title': ' KAM CTAS. CLAVES VINOS ' },
                                                { 'name': 'Pedro Basualto', 'title': ' KAM supermercados '          },
                                                { 'name': 'Patricio Cruz', 'title': ' KAM mayorista '               },
                                                {
                                                  'name': 'Juan Pablo Orellana', 'title': ' Jefe Ventas On Premise ',
                                                    'children':
                                                        [
                                                            { 'name': 'Danny Matus', 'title': 'Ejecutivo Ventas Call Center'                  },
                                                            { 'name': 'Marcela Muñoz', 'title': 'Ejecutivo Ventas Call Center'                },
                                                            { 'name': 'Karla Herrera', 'title': 'Ejecutivo Ventas Call Center'                },
                                                            { 'name': 'Daphne Rivas', 'title': 'Ejecutivo Ventas Call Center'                 },
                                                            { 'name': 'Jacqueline Cardemil', 'title': 'Ventas Particulares e Instituciones'   },
                                                        ]
                                                },
                                                {
                                                  'name': 'Franco Tamburini', 'title': ' Gerente Trade Marketing On ',
                                                    'children':
                                                        [
                                                            { 'name': 'Matías Zakrzewicz', 'title': 'Jefe On Trade Stgo'},
                                                            { 'name': 'Guillermo San Martín', 'title': 'Trade Mktg' 	},
                                                            { 'name': 'Soledad Barros', 'title': 'Trade Mktg' 			},
                                                            { 'name': 'Matias Jahn  F.', 'title': 'Trade Mktg' 			},
                                                            { 'name': 'Sebastian Valenzuela', 'title': 'On Trade CCH' 	},
                                                        ]
                                                },
                                                {
                                                  'name': 'Mauricio Almuna', 'title': ' Jefe Ventas Supermercado',
                                                    'children':
                                                        [
                                                            { 'name': 'Camilo Suarez', 'title': 'Jefe Off Trade ' 			},
                                                            { 'name': 'Oscar Verdugo', 'title': 'Representante de Ventas' 	},
                                                            { 'name': 'Pedro Sagal', 'title': 'Representante de Ventas' 	},
                                                            { 'name': 'Cristian Ortiz', 'title': 'Representante de Ventas' 	},
                                                            { 'name': 'Marcelo Lara', 'title': 'Representante de Ventas' 	},
                                                            { 'name': 'Pedro Farías', 'title': 'Representante de Ventas' 	},
                                                        ]
                                                },
                                                {
                                                  'name': 'Marco Sandoval', 'title': ' Sales Planner',
                                                    'children':
                                                        [
                                                            { 'name': 'Clara Plat', 'title': 'Asistente Comercial' 			},
                                                            { 'name': 'Cristóbal Yevenes', 'title': 'Asistente Comercial' 	},
                                                            { 'name': 'Cynthia Vargas', 'title': 'Asistente Comercial' 		},
                                                        ]
                                                },
                                              ]
                              },
                              { 'name': ' Patricio Vázquez ', 'title': ' Gerente licores '              },
                              {
                                'name': ' Diego Yurjevic ', 'title': ' Subgerente vinos',
                                  'children':
                                      [
                                          { 'name': 'Maria Jose Prado		', 'title': 'Diseñadora										' },
                                          { 'name': 'Julieta Mancilla		', 'title': 'Brand Manager Errázuriz y Caliterra         	' },
                                          { 'name': 'Alejandra Caldera	    ', 'title': 'Brand Manager O. Negra/Veramonte/Morandé    	' },
                                          {
                                            'name': 'Gerardo Reichert		', 'title': 'Brand Manager Marcas Boutique VSC/CM/SÑ/TAM 	',
                                              'children':
                                                [
                                                    { 'name': 'Diego Garcia', 'title': 'Asistente de Marketing ' },
                                                ]
                                          },
                                          {
                                            'name': 'Daniela Crisostomo	    ', 'title': 'Brand Manager de Viña Undurraga             	',
                                              'children':
                                                [
                                                    { 'name': 'Benjamín Meriz', 'title': 'Asistente de Marketing' },
                                                ]
                                          },
                                          { 'name': 'Verónica Brieva		', 'title': 'On Trade Manager                            	' },
                                          { 'name': 'Beatriz Errázuriz   	', 'title': 'On Trade Manager                            	' },
                                          { 'name': 'Paloma Peralta      	', 'title': 'On Trade Manager                            	' },
                                          { 'name': 'Felipe Hoffmann     	', 'title': 'On Trade Manager                            	' },
                                          { 'name': 'Marcelo Vasquez     	', 'title': 'On Trade Manager                            	' },
                                          { 'name': 'Ivonne Delsauth		', 'title': 'Sommelier Errázuriz                         	' },
                                      ]
                              },
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