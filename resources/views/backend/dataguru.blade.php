@extends('backend.layouts.app')
@section('container')
    
    
<a href="/guru/tambah" class="btn btn-primary float-right" style="margin-top: 100px;">Input Guru Baru</a>
    <div class="container">
        <div class="card" style="margin-bottom: 500px; margin-top: 100px;">
            <div class="card-body">
                <table class="table">
                    <div class="text text-center">
                        <p>Data Guru Smkn 11 Bandung</p>
                    </div>
                    <tr>
                        <th>nip</th>
                        <th>nama</th>
                        <th>gelar</th>
                        <th>mapel</th>
                        <th>action</th>
                    </tr>
                   
                    @foreach ($guru as $g)
                        <tr>
                            <td>{{ $g ->nip }}</td>
                            <td>{{ $g ->nama }}</td>
                            <td>{{ $g ->gelar }}</td>
                            <td>{{ $g ->mapel }}</td>
                            <td>
                                <a href="/guru/edit/{{ $g->id }}" class="btn btn-warning">Edit</a> 
                                <a href="/guru/hapus/{{ $g->id }}" class="btn btn-danger">Hapus</a>
                            </td>        
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
<!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script>
      $(function(){
        $('.editbutton').on('click' , function(){
            var id = $(this).data('id');
            $('#exampleModal').modal('show');

            $.get('/edit/' + id , function(data){
                console.log(data);
                $('#exampleInputEmail1').val(data.nip);
            })
        })
      });
  </script>
@endsection