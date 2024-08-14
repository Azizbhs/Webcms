<div class="container">
    <div class="card shadow-sm mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="card-title mb-0">Announcement</h5>
        @include('backend.layouts.components.datepicker')
      </div>
      <div class="list-group list-group-flush">
        <div class="list-group-item d-flex justify-content-between align-items-center">
          <div>
            <strong>Outing schedule for every department</strong>
            <br>
            <small>5 Minutes ago</small>
          </div>
          <button class="btn btn-light">
            <i class="bi bi-pin"></i> <!-- Bootstrap Icons used here -->
          </button>
        </div>
        <div class="list-group-item d-flex justify-content-between align-items-center">
          <div>
            <strong>Meeting HR Department</strong>
            <br>
            <small>Yesterday, 12:30 PM</small>
          </div>
          <button class="btn btn-light">
            <i class="bi bi-pin"></i>
          </button>
        </div>
        <div class="list-group-item d-flex justify-content-between align-items-center">
          <div>
            <strong>IT Department need two more talents for UX/UI Designer position</strong>
            <br>
            <small>Yesterday, 09:15 AM</small>
          </div>
          <button class="btn btn-light">
            <i class="bi bi-pin"></i>
          </button>
        </div>
      </div>
      <div class="card-footer text-center">
        <a href="#" class="text-danger">See All Announcement</a>
      </div>
    </div>
  </div>