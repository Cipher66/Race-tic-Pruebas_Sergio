@extends('layouts.app')

@section('content')
   <div class="container">
       <div class="row">
        <h3>Contáctanos</h3>
       </div>
   </div>

    <div class="container">
        <div class="row">
            <div class=" "> <!-- col-md-8 -->
                <div class="well well-sm">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">
                                        Nombre</label>
                                    <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span>
                                </span>
                                        <input type="text" class="form-control" id="name" placeholder="Introduzca su nombre" required="required" /></div>
                                </div>
                                <div class="form-group">
                                    <label for="email">
                                        Correo Electrónico</label>
                                    <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                        <input type="email" class="form-control" id="email" placeholder="example@gmail.com" required="required" /></div>
                                </div>
                                <div class="form-group">
                                    <label for="subject">
                                        Asunto</label>
                                    <select id="subject" name="subject" class="form-control" required="required">
                                        <option value="na" selected="">Escoja uno por favor:</option>
                                        <option value="service">Atención al cliente</option>
                                        <option value="suggestions">Sugerencias</option>
                                        <option value="product">Quejas</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">
                                        Mensaje</label>
                                    <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                              placeholder="Mensaje"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                                    Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>






@endsection