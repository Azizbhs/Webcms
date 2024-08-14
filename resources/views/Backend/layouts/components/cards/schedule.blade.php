<div class="announcment mt-4 col-11">
    <div class=" shadow-sm">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="card-title mb-0">Upcoming Schedule</h5>
        @include('backend.layouts.components.datepicker')
      </div>
      <div class="list-group sch list-group-flush mt-3">
        <p class ="status">Priority</p>
        @include('backend.layouts.components.elements.listItem', [
          'title' => 'Review Candidate applications',
          'time' => 'Today-11:30 AM',
          'showSecondIcon' => false
        ])
        <p class ="status">Other</p>
        @include('backend.layouts.components.elements.listItem', [
          'title' => 'Interview with candidates',
          'time' => 'Today-10:30 AM',
          'showSecondIcon' => false
        ])
        @include('backend.layouts.components.elements.listItem', [
          'title' => 'Short meeting with product designer from IT Departement',
          'time' => 'Today-09:15 AM',
          'showSecondIcon' => false
        ])
        @include('backend.layouts.components.elements.listItem', [
          'title' => 'Short meeting with product designer from IT Departement',
          'time' => 'Today-09:15 AM',
          'showSecondIcon' => false
        ])
        @include('backend.layouts.components.elements.listItem', [
          'title' => 'Short meeting with product designer from IT Departement',
          'time' => 'Today-09:15 AM',
          'showSecondIcon' => false
        ])
        @include('backend.layouts.components.elements.listItem', [
          'title' => 'Short meeting with product designer from IT Departement',
          'time' => 'Today-09:15 AM',
          'showSecondIcon' => false
        ])
      </div>
      <div class="card-footer text-center">
        <a href="#" class="text-danger">Create a new Schedule</a>
      </div>
  </div>
</div>
