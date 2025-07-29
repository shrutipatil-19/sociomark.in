@if(isset($data['social']) && (
    !empty($data['social']['facebook']) ||
    !empty($data['social']['instagram']) ||
    !empty($data['social']['x']) ||
    !empty($data['social']['linkdin'])
))
<div class="th-social">
    <p class="sec-para"><b>Page Link:</b></p>

    @if(!empty($data['social']['facebook']))
    <a href="{{ $data['social']['facebook'] }}" target="_blank">
        <i class="fab fa-facebook-f"></i>
    </a>
    @endif

    @if(!empty($data['social']['instagram']))
    <a href="{{ $data['social']['instagram'] }}" target="_blank">
        <i class="fab fa-instagram"></i>
    </a>
    @endif

    @if(!empty($data['social']['x']))
    <a href="{{ $data['social']['x'] }}" target="_blank">
        <i class="fa-brands fa-x-twitter"></i>
    </a>
    @endif

    @if(!empty($data['social']['linkdin']))
    <a href="{{ $data['social']['linkdin'] }}" target="_blank">
        <i class="fab fa-linkedin-in"></i>
    </a>
    @endif
</div>
@endif
