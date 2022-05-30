@extends('layouts.user')
@section('titre')
HISTOIRE
@endsection
@section('contenu')
<body>
    <section class="global1 container-fluid bg-light ">
        <div class="row">
            <div class="mx-auto col-sm-12 col-md-6">
                <div class="bloctitre m-5">
                    <h1>HISTOIRE DE PREVENTION SPECIALISEE</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="mx-auto col-sm-12 col-md-6">
                <div class="blocP  ">
                    <p>
                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.<br> Richard McClintock, a Latin professor at Hampden-Sydney
                        College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,<br> discovered the undoubtable source. Lorem Ipsum
                        comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by <br>Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance.
                        The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="global2">
        <div class="row container-fluid ">
            <div class=" bloc1  col-mx-12 col-md-6 col-lg-6">
                <div>
                    <img src={{asset("images/Illustration quartier.jpg")}} class="illus" alt="quartier">
                </div>
            </div>
        </div>
    </section>
    <section class="global3 bg-light">
        <div class="row container-fluid">
            <div class=" bloc2 col-mx-12 clo-md-6 col-lg-6">
                <div>
                    <img src={{asset("images/monde.jpeg")}} id="mondImma" alt="">
                </div>
            </div>
            <div class=" bloc3 col-mx-12 col-md-6 col-lg-6">
                <div>
                    <h1 class="py-5"> CREATION D'EMMAUS SYNERGIE</h1>
                    <p>
                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.<br> Richard McClintock, a Latin professor at Hampden-Sydney
                        College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,<br> discovered the undoubtable source. Lorem Ipsum
                        comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by <br>Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance.
                        The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32. Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from
                        45 BC, making it over 2000 years old.<br> Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through
                        the cites of the word in classical literature,<br> discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by <br>Cicero, written
                        in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

                    </p>
                </div>
            </div>
        </div>
    </section>
