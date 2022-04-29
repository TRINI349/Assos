@extends("layouts.base")


@section("contenu")

 <div class="container">
     <div class="col-12 col-sm-10 col-md-6 col-lg-4 mx-auto">
         <form action="/contact" method="post">
             @csrf
             <div class="row mb-2">
                 <label for="email">Email</label>
                 <input name="email" required type="email" class="form-control-lg" id="email" value="{{old("email")}}" placeholder="Enter Email" >
                 @error("email")
                 <div class="text-danger">{{$message}}</div>
                 @enderror
                </div>

             <div class="row mb-2">
                 <label for="sujet">Sujet</label>
                 <input name="sujet" required type="text" class="form-control-lg" id="sujet" value="{{old("sujet")}}" placeholder="Enter Sujet">
                 @error("sujet")
                 <div class="text-danger">{{$message}}</div>
                 @enderror
                </div>

             <div class="row mb-2">
                 <label for="message"></label>
                 <textarea name="message" required type="text" class="form-control-lg" id="message" value="{{old("message")}}" placeholder="Enter Message "> </textarea>
                 @error("message")
                 <div class="text-danger">{{$message}}</div>
                 @enderror
                </div>

                <div class="form-group{{ $errors->has('captcha') ? ' has-error' : '' }}">
                    <label for="password" class="col-md-4 control-label-lg mb-3">Captcha</label>
                    <div class="form-group">
                        <div class="captcha">
                        <span>{!! captcha_img() !!}</span>
                        <button type="button" class="btn btn-success btn-refresh"><i class="bi bi-arrow-clockwise"></i></button>
                        </div>
                        <input id="captcha" type="text" class="form-control-lg mt-3" placeholder="Enter Captcha" name="captcha">
                        @if ($errors->has('captcha'))
                            <span class="help-block">
                                <strong>{{ $errors->first('captcha') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
         <button type="submit" class="btn btn-primary mt-4">Envoyer</button>
         </form>
     </div>
 </div>
 <script type="text/javascript">
    $(".btn-refresh").click(function(){
      $.ajax({
         type:'GET',
         url:'/refreshcaptcha',
         success:function(data){
            $(".captcha span").html(data.captcha);
         }
      });
    });


    </script>
@endsection
