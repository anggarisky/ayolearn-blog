<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />
    {{-- @vite('resources/css/app.css') --}}
    <link rel="stylesheet" href="{{ asset('vendor/laraberg/css/laraberg.css') }}">

    <title>New Tutorial | Dashboard | Ayolearn</title>
</head>
<body>
    <section class="mt-20 w-9/12 mx-auto mb-20">
        <div class="grid grid-cols-1 gap-4">
            <div class="heading">
                <h1 class="text-4xl font-bold text-indigo-900 mb-8">
                    New Tutorial
                </h1>
            </div>
        </div>
        <div class="grid grid-cols-1 gap-4">
            <form enctype="multipart/form-data" method="POST" action="{{ route('admin.store.tutorial') }}">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Title</label>
                  <input name="title" type="text" class="form-control" id="exampleInputEmail1"
                         aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Thumbnail</label>
                  <input type="file" name="thumbnail" class="form-control" id="exampleInputPassword1">
                </div>
                <input type="hidden" name="id_creator" value="1">
                <div style="margin-bottom: 10px;">
                  <textarea id="tutorial" name="content" hidden></textarea>
                  @error('tutorial')
                    <span class="invalid-feedback" style="color: red" role="alert">
                      {{ $message }}
                    </span>
                  @enderror
                </div>
                <button type="submit" class="px-4 py-3 rounded-lg bg-indigo-500 text-white">Save Tutorial</button>
              </form>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
  </script>
  <script src="https://unpkg.com/react@17.0.2/umd/react.production.min.js"></script>
  <script src="https://unpkg.com/react-dom@17.0.2/umd/react-dom.production.min.js"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script src="{{ asset('vendor/laraberg/js/laraberg.js') }}"></script>
  <script>
    const mediaUpload = ({
      filesList,
      onFileChange
    }) => {
      setTimeout(async () => {
        let data = new FormData;
        Array.from(filesList).map(file => {
          data.append('image', file);
        });

        const information = await axios.post("{{ route('laraberg.upload') }}", data, {
          headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}',
            'Content-Type': 'multipart/form-data'
          }
        }).then(function(response) {
          return response.data.msg;
        })

        const uploadedFiles = Array.from(filesList).map(file => {
          return {
            id: file.id,
            name: file.name,
            url: information
          }
        })

        onFileChange(uploadedFiles)
      }, 0)
    }
    Laraberg.init('tutorial', {
      mediaUpload: mediaUpload,
      imageEditing: true,
      supportsLayout: true
    })
  </script>
</body>
</html>