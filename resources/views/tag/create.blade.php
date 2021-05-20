<x-layouts.app>
  <section class="section">
    <div class="container">
      <div class="title is-2">Create New Tag</div>
      <form action="{{ route('tags.store') }}" method="POST">
        @csrf
            <div class="field">
              <label class="label">Tag Name</label>
              <div class="control">
                <input class="input @error('name')is-danger @enderror" name="name" type="text" value="{{ old('name') }}" placeholder="name">
              </div>
              @error('name')
                <p class="help is-danger">{{ $message }}</p>
              @enderror
            </div>

            <div class="field">
              <label class="label">slug</label>
              <div class="control">
                <input class="input @error('slug')is-danger @enderror" name="slug" type="text" value="{{ old('slug') }}" placeholder="slug">
              </div>
              @error('slug')
                <p class="help is-danger">{{ $message }}</p>
              @enderror
            </div>

        <div class="field is-grouped">
          <div class="control">
            <button class="button is-link">Create new Tag</button>
          </div>
          <div class="control">
            <button class="button is-link is-light">Cancel</button>
          </div>
        </div>
      </form>
    </div>
  </section>

</x-layouts.app>
