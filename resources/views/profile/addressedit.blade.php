@extends('layouts.prolayout')

@section('content')

<div id="content-wrapper" class="d-flex flex-column col-10 p-5">

 <div id="content">

  <div class="container-fluid">

    <div class="card cardbg o-hidden border-0 shadow-lg my-5">
        <div class="row justify-content-center">
          <div class=" jccenter">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4 darkpurplec"><i class="fas fa-fw fa-map-marked-alt fa-x"></i> آدرس ها</h1>
              </div>
              <div class="text-right">
                    <h5 class="h6 text-gray-900 mb-4  tifany">آدرس های من</h5>
                  </div>
                  <p> <i class="fas fa-fw fa-map-marker-alt tifany"></i> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                    <span class="mr15 "><a class="btn btn-danger btn-circle btn-sm padding0 margin0 d-inflex darkredbg" href="/deleteProfil/v[id]" onclick="return confirm('آیا مطمئن هستید که می خواهید این آدرس را حذف کنید ؟');">
                        <i class="fas fa-trash"></i>
                      </a></span></p>
                  <p> <i class="fas fa-fw fa-map-marker-alt tifany"></i> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                    <span class="mr15 "><a class="btn btn-danger btn-circle btn-sm padding0 margin0 d-inflex darkredbg" href="/deleteProfil/v[id]" onclick="return confirm('آیا مطمئن هستید که می خواهید این آدرس را حذف کنید ؟');">
                        <i class="fas fa-trash"></i>
                    </a></span></p>
                  <p> <i class="fas fa-fw fa-map-marker-alt tifany"></i> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                    <span class="mr15 "><a class="btn btn-danger btn-circle btn-sm padding0 margin0 d-inflex darkredbg" href="/deleteProfil/v[id]" onclick="return confirm('آیا مطمئن هستید که می خواهید این آدرس را حذف کنید ؟');">
                        <i class="fas fa-trash"></i>
                    </a></span></p>

                  <div class="text-right mt-5">
                        <h5 class="h6 text-gray-900 mb-4  tifany">آدرس جدید</h5>
                      </div>
                    <form class="user">
                  <div class="form-group text-right">
                      <label class="mr-2" for="address">آدرس کامل</label>
                    <input type="text" class="form-control form-control-user myinput" id="address" name="address">
                  </div>
                <div class="form-group row pb-4">
                  <div class="col-sm-6 mb-3 mb-sm-0 text-right">
                      <label class="mr-2" for="password">کد پستی</label>
                    <input type="password" class="form-control form-control-user myinput" id="post" name="post">
                  </div>
                  <div class="col-sm-6 text-right">
                      <label class="mr-2" for="confirmpassword">تلفن ثابت</label>
                    <input type="password" class="form-control form-control-user myinput" id="cellphone" name="cellphone">
                  </div>
                </div>
                    <a href="login.html" class="probutton width100 text-center letter__spacing__1">
                    ذخیره آدرس
                    </a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>{{-- === --}}
@endsection
