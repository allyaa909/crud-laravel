<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Data Guru | Edit</title>
    </head>
    <body>
 
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    CRUD Data Guru - <strong>EDIT DATA</strong>
                </div>

                <div class="card-body">
                    <a href="/guru" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    <form method="post" action="/guru/update/{{ $guru->id }}">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div class="form-group">
                            <label>NIP</label>
                            <input type="text" name="nip" class="form-control" placeholder="NIP guru ..." value=" {{ $guru->nip }}">
                            @if($errors->has('nip'))
                                <div class="text-danger">
                                    {{ $errors->first('nip')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama guru ..." value=" {{ $guru->nama }}">
                            @if($errors->has('nama'))
                                <div class="text-danger">
                                    {{ $errors->first('nama')}}
                                </div>
                            @endif
                        </div>
                        
                        <div class="form-group">
                            <label>Gelar</label>
                            <textarea name="gelar" class="form-control" placeholder="Gelar guru ..."> {{ $guru->gelar }} </textarea>
                            @if($errors->has('gelar'))
                                <div class="text-danger">
                                    {{ $errors->first('gelar')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Mapel</label>
                            <textarea name="mapel" class="form-control" placeholder="Mapel guru ..."> {{ $guru->mapel }} </textarea>
                            @if($errors->has('mapel'))
                                <div class="text-danger">
                                    {{ $errors->first('mapel')}}
                                </div>
                            @endif
                        </div>
                        
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
                    </form>
                </div>
            </div>
        </div>
      
    </body>
    </html>