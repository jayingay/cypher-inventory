<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
    {{-- <div>
        {{ $logo }}
    </div> --}}

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
       <p>{{ $logo }}</p>
          {{ $slot }}
    </div>
</div>
<style>
.min-h-screen{
   background-image: url({{ asset('./admin/dist/img/login-background.jpg') }});
   background-repeat: no-repeat;
   background-position: center;
   background-size:cover;
}  

p{
    margin-left: 4.5rem;
}
/* @media  (max-height:413px){
   p{
    margin-left: -1rem;
   }   
}

@media  (min-height:640px){
   p{
    margin-left: 4.5rem;
   }   
} */

</style>
