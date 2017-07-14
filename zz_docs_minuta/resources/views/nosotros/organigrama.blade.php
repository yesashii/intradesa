@extends('layouts.app')


@section('content')
    <div  class="container">

        <div class="orgchart">
            <table>
                <tbody>
                <tr>
                    <td colspan="2">
                        <div draggable="true" class="node">
                            <div class="title"><i class="fa fa-users symbol"></i> Rodrigo Oyanedel </div>
                            <div class="content"> Presidente ejecutivo </div>
                            <i class="edge verticalEdge bottomEdge fa"></i>
                        </div>
                    </td>
                </tr>
                <tr class="lines">
                    <td colspan="2">
                        <div class="downLine"></div>
                    </td>
                </tr>
                <tr class="lines">
                    <td class="rightLine">&nbsp;</td>
                    <td class="leftLine">&nbsp;</td>
                </tr>
                <tr class="nodes">
                    <td colspan="2">
                        <table>
                            <tbody>
                            <tr>
                                <td colspan="16">
                                    <div draggable="true" class="node">
                                        <div class="title"><i class="fa fa-users symbol"></i> Rafael Velasco</div>
                                        <div class="content"> Gerente general </div>
                                        <i class="edge verticalEdge topEdge fa"></i><i class="edge verticalEdge bottomEdge fa"></i>
                                    </div>
                                </td>
                            </tr>
                            <tr class="lines">
                                <td colspan="16">
                                    <div class="downLine"></div>
                                </td>
                            </tr>
                            <tr class="lines">
                                <td class="rightLine">&nbsp;</td>
                                <td class="leftLine topLine">&nbsp;</td>
                                <td class="rightLine topLine">&nbsp;</td>
                                <td class="leftLine topLine">&nbsp;</td>
                                <td class="rightLine topLine">&nbsp;</td>
                                <td class="leftLine topLine">&nbsp;</td>
                                <td class="rightLine topLine">&nbsp;</td>
                                <td class="leftLine topLine">&nbsp;</td>
                                <td class="rightLine topLine">&nbsp;</td>
                                <td class="leftLine topLine">&nbsp;</td>
                                <td class="rightLine topLine">&nbsp;</td>
                                <td class="leftLine topLine">&nbsp;</td>
                                <td class="rightLine topLine">&nbsp;</td>
                                <td class="leftLine topLine">&nbsp;</td>
                                <td class="rightLine topLine">&nbsp;</td>
                                <td class="leftLine">&nbsp;</td>
                            </tr>
                            <tr class="nodes">
                                <td colspan="2">
                                    <table>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div draggable="true" class="node">
                                                    <div class="title"> Rodrigo Guzmán </div>
                                                    <div class="content"> Gerente comercial                 </div>
                                                    <i class="edge verticalEdge topEdge fa"></i><i class="edge horizontalEdge rightEdge fa"></i><i class="edge horizontalEdge leftEdge fa"></i>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                                <td colspan="2">
                                    <table>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div draggable="true" class="node">
                                                    <div class="title"> Patricio Vázquez </div>
                                                    <div class="content"> Gerente licores                 </div>
                                                    <i class="edge verticalEdge topEdge fa"></i><i class="edge horizontalEdge rightEdge fa"></i><i class="edge horizontalEdge leftEdge fa"></i>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                                <td colspan="2">
                                    <table>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div draggable="true" class="node">
                                                    <div class="title"> Diego Yurjevic </div>
                                                    <div class="content"> Subgerente vinos                  </div>
                                                    <i class="edge verticalEdge topEdge fa"></i><i class="edge horizontalEdge rightEdge fa"></i><i class="edge horizontalEdge leftEdge fa"></i>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                                <td colspan="2">
                                    <table>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div draggable="true" class="node">
                                                    <div class="title"> Francisco Yáñez</div>
                                                    <div class="content"> Gerente licores </div>
                                                    <i class="edge verticalEdge topEdge fa"></i><i class="edge horizontalEdge rightEdge fa"></i><i class="edge horizontalEdge leftEdge fa"></i>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                                <td colspan="2">
                                    <table>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div draggable="true" class="node">
                                                    <div class="title"> Roger Muñoz </div>
                                                    <div class="content"> Área de Cervezas </div>
                                                    <i class="edge verticalEdge topEdge fa"></i><i class="edge horizontalEdge rightEdge fa"></i><i class="edge horizontalEdge leftEdge fa"></i>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                                <td colspan="2">
                                    <table>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div draggable="true" class="node">
                                                    <div class="title"> Victor Díaz </div>
                                                    <div class="content"> SubGerente Adm .y Finanzas </div>
                                                    <i class="edge verticalEdge topEdge fa"></i><i class="edge horizontalEdge rightEdge fa"></i><i class="edge horizontalEdge leftEdge fa"></i>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                                <td colspan="2">
                                    <table>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div draggable="true" class="node">
                                                    <div class="title"> Alejandro Retamal </div>
                                                    <div class="content"> SubGerente Operaciones </div>
                                                    <i class="edge verticalEdge topEdge fa"></i><i class="edge horizontalEdge rightEdge fa"></i><i class="edge horizontalEdge leftEdge fa"></i>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                                <td colspan="2">
                                    <table>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div draggable="true" class="node">
                                                    <div class="title"> Daniella Galli </div>
                                                    <div class="content"> Jefe de RRHH </div>
                                                    <i class="edge verticalEdge topEdge fa"></i><i class="edge horizontalEdge rightEdge fa"></i><i class="edge horizontalEdge leftEdge fa"></i>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>

    </div>




@endsection





