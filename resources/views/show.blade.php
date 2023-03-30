<section class="hk-sec-wrapper">

    <fieldset class="border p-5">

        <legend class="w-auto">INFORMATION DE L'AGENT .....</legend>


        </div>
        <div class="row">
            <form class="form-group" action="/voiragent/{id}" method="post">

                {!! csrf_field() !!}
                @method("get")
                
                <label class="clo-6">Name</label> </br>
                </b> {{$agent->name}} </b> </br></br></br>

                <label class="form-control">Email</label></br>
                </b> {{$agent->email}} </b> </br></br></br>

                <label class="form-control">MATRICULE </label></br>
                {{$agent->matricule}}</br></br></br>

                <label class="form-control">GENRE </label></b> </br>
                {{$agent->sexe}} </br></br></br>

                <label class="form-control">DATE DE NAISSANCE </label></br>
                {{$agent->date_de_naissance}} </br></br></br>

                </br>



                <input type="button" value="RETOUR" onclick="history.back()">
            </form>

            <div class="col-sm">


            </div>
        </div>
    </fieldset>

</section>
