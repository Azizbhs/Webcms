<div class ="graph-card" style="width: 20rem;">
    <div>
        <h5 class ="card-title">{{ $title }}</h5>
        <p class = "card2-num">{{ $num }}</p>
        <p style="font-size:12px; color:#686868">{{ $men }} Men <br> {{$women}} Women</p>
    </div>
    <div class="graph-container">
        <img src="{{ $imgss }}" alt="graph" class="graph">
        <p class = "percentage"> + {{$percentage}}% Past Month</p>
    </div>
</div>
