<x-app-layout>

    <section class="erroepage">
        <div class="errorcontainer">
          <h5 class="errored">Error!</h5>
          <h1>500</h1>
          <p><b>Something Went Wrong On Our End.</b></p>
          <p>
            We are experiencing some technical difficulties. Do not worry, <br />
            our team is working on it!
          </p>
          <button class="btn btn-homepage">
            <a href="{{ route('home') }}">Back To HomePage</a>
          </button>
        </div>
      </section>

</x-app-layout>
