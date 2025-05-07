<x-app-layout>

    <section class="erroepage">
        <div class="errorcontainer">
          <h5 class="errored">Error!</h5>
          <h1>404</h1>
          <p><b>Oops, We Can't Find That Page.</b></p>
          <p>
            The page you are looking for might have been moved, <br />
            renamed, or does not exist.
          </p>
          <button class="btn btn-homepage">
            <a href="{{ route('home') }}">Back To HomePage</a>
          </button>
        </div>
      </section>

</x-app-layout>
