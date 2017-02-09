@extends ('layouts.master')

@section('content')
  <section class="row new-post">
    <div class="col-sm-6 col-sm-offset-3">
      <header>
        <h3>What do you have to say?</h3>
      </header>

      <form action="">
        <div class="form-group">
          <textarea class="form-control" name="new-post" id="new-post" rows="5" placeholder="Your post"></textarea>
        </div>

        <button type="submit" name="btn btn-primary">Create Post</button>
      </form>
    </div>
  </section>
  <section class="row posts">
    <div class="col-sm-6 col-sm-offset-3">
      <header>
        <h3>What other people are saying.</h3>
      </header>


  </section>

@endsection
