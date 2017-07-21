<div class="panel panel-default">
    <div class="panel-heading"><strong>Áreas</strong></div>
    <div class="panel-body" style="height: 810px;">

        <!-- INICIO DE ACORDEON -->
        <div class="panel-group" id="accordion">

            <!-- RRHH -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h6 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon glyphicon-log-out"></span> RRHH</a>
                    </h6>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <td>
                                    <a href="{{ route('certificados') }}">Solicitud de certificados</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a data-toggle="collapse"  href="#collapseOne_rrhh_beneficios"><span class="glyphicon glyphicon glyphicon-log-out"></span> Beneficios</a>

                                    <!-- SUB PANEL BENEFICIOS -->

                                    <div id="collapseOne_rrhh_beneficios" class="collapse">

                                        <ul>
                                            <li>Corporativos</li>
                                            <li>Salud</li>
                                            <li>Vida personal, familiar y recreación</li>
                                            <li>Economía</li>
                                        </ul>

                                    </div>

                                    <!-- SUB PANEL BENEFICIOS -->

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="{{ route('liquidaciones') }}">Liquidaciones</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a data-toggle="collapse"  href="#collapseOne_rrhh_formularios"><span class="glyphicon glyphicon glyphicon-log-out"></span> Formularios</a>
                                    <!-- SUB PANEL FORMULARIOS -->
                                    <div id="collapseOne_rrhh_formularios" class="collapse">

                                        <ul>
                                            <li><a href="{{ route('formularios') }}">Vacaciones</a></li>
                                        </ul>

                                    </div>
                                    <!-- SUB PANEL FORMULARIOS -->

                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <!-- #RRHH -->

            <!-- COMERCIAL -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h6 class="panel-title"><span class="glyphicon glyphicon glyphicon-log-out"></span> COMERCIAL</h6>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="panel-body">

                    </div>
                </div>
            </div>
            <!-- #COMERCIAL -->

            <!-- Marketing -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h6 class="panel-title"><span class="glyphicon glyphicon glyphicon-log-out"></span> MARKETING</h6>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="panel-body">

                    </div>
                </div>
            </div>
            <!-- #Marketing -->

            <!-- Adm. y Finanzas -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h6 class="panel-title"><span class="glyphicon glyphicon glyphicon-log-out"></span> ADM. Y FINANZAS</h6>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="panel-body">

                    </div>
                </div>
            </div>
            <!-- #Adm. y Finanzas -->

            <!-- Logística -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h6 class="panel-title"><span class="glyphicon glyphicon glyphicon-log-out"></span> LOGÍSTICA</h6>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="panel-body">

                    </div>
                </div>
            </div>
            <!-- #Logística -->

            <!-- Sistemas -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h6 class="panel-title"><span class="glyphicon glyphicon glyphicon-log-out"></span> SISTEMAS</h6>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="panel-body">

                    </div>
                </div>
            </div>
            <!-- #Sistemas -->



        </div>
        <!-- #INICIO DE ACORDEON -->

    </div>
</div>