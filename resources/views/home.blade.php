@extends('layout')

@section('content')

    <style>
        .font-pop {
            font-family: 'Anton', sans-serif;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        .text-pop-shadow {
            text-shadow: 3px 3px 0px #000000;
        }

        .text-pop-shadow-red {
            text-shadow: 3px 3px 0px #FF4757;
        }

        .box-hard-shadow {
            box-shadow: 8px 8px 0px 0px rgba(0, 0, 0, 0.2);
        }

        .font-body {
            font-family: 'Be Vietnam Pro', sans-serif;
        }
    </style>

    <div class="bg-[#341f97] p-2 md:p-8 font-body flex justify-center items-start">

        <div class="max-w-[1100px] w-full bg-white flex flex-col md:flex-row shadow-2xl overflow-hidden rounded-xl">

            <div
                class="w-full md:w-[35%] bg-[#2f3542] text-white p-6 md:p-8 relative flex flex-col gap-10 border-r-8 border-[#FDCB6E]">

                @include('ingredient.avt')

                @include('ingredient.contact')

                @include('ingredient.skill')

                @include('ingredient.certifate')

                @include('ingredient.hobbie')

            </div>

            <div class="w-full md:w-[65%] bg-white flex flex-col">

                @include('ingredient.about')

                @include('ingredient.education')

                @include('ingredient.experience')

            </div>
        </div>
    </div>

@endsection