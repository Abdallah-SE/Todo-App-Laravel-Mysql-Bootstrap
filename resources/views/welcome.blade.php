        @extends("layouts.app")
        @section("content")
        <div class="container text-center d-flex flex-column flex-center" style="margin-left:370px;">
            <a href='/todos' class="card text-white bg-primary mb-3 text-decoration-none shadow-lg p-3 mb-5 rounded" style="max-width: 18rem;">
                <div class="card-header">View Todos</div>
                <div class="card-body">
                  <h5 class="card-title">See now hhat's your missed</h5>
                  <p class="card-text">Some quick example tasks Remind you about self-imposed, navigating the tasks now</p>
                </div>
            </a>
            <a href='/new-todos'  class="card text-white bg-secondary mb-3  text-decoration-none  shadow-lg p-3 mb-5 rounded" style="max-width: 18rem;">
                <div class="card-header">Create Todos</div>
                <div class="card-body">
                  <h5 class="card-title">Get Starting</h5>
                  <p class="card-text">
                      Make it fast to add and organize tasks. Ideally, a task is added and categorized in a couple taps or keystrokes.
                  </p>
                </div>
            </a>
        </div>
   @endsection
