
@extends('templates.facade-template')



@section('scripts')


@endsection



@section('body')


    <div class="bg-primary text-white h-50 flex items-center justify-center flex-col">
        <div class="w-fit text-center flex justify-center flex-col items-center">
            <div class="font-bold text-5xl"> Our Programs </div>
            <div class="bg-white h-3 mt-5 w-45"></div>
        </div>
        <div class="grid grid-cols-5 max-w-5xl w-full">
        </div>
    </div>

    <div class="prose max-w-5xl mx-auto mt-10">
        <div class="grid grid-cols-1fr md:grid-cols-[10fr_3fr]  gap-5" id="pre-school">
            <div class="mt-5">
                <h2 id="pre-school"> Pre-School </h2>
                <div class="h-3 bg-primary"> </div>
                <div>Ipsum, faucibus vitae aliquet nec, ullamcorper sit amet risus nullam eget felis eget nunc lobortis mattis aliquam faucibus purus in massa tempor nec feugiat? Ipsum suspendisse ultrices gravida dictum fusce?</div>

                <div>Ipsum, faucibus vitae aliquet nec, ullamcorper sit amet risus nullam eget felis eget nunc lobortis mattis aliquam faucibus purus in massa tempor nec feugiat? Ipsum suspendisse ultrices gravida dictum fusce?</div>

            </div>
            <div class=""></div>
        </div>
        <a href="/admission" class="btn btn-primary"> Enroll Now </a>
    </div>


    <div class="prose max-w-5xl mx-auto mt-10 " id="elmentary">
        <div class="grid grid-cols-1fr md:grid-cols-[10fr_3fr] gap-5">
            <div class="mt-5">
                <h2 id="elementary"> Elementary </h2>
                <div class="h-3 bg-primary"> </div>
                <div>Ipsum, faucibus vitae aliquet nec, ullamcorper sit amet risus nullam eget felis eget nunc lobortis mattis aliquam faucibus purus in massa tempor nec feugiat? Ipsum suspendisse ultrices gravida dictum fusce?</div>

                <div>Ipsum, faucibus vitae aliquet nec, ullamcorper sit amet risus nullam eget felis eget nunc lobortis mattis aliquam faucibus purus in massa tempor nec feugiat? Ipsum suspendisse ultrices gravida dictum fusce?</div>


            </div>
            <div class=""></div>
        </div>
        <a href="/admission" class="btn btn-primary"> Enroll Now </a>
    </div>

    <div class="prose max-w-5xl mx-auto mt-10" id="junior-high">
        <div class="grid grid-cols-1fr md:grid-cols-[10fr_3fr] gap-5">
            <div class="mt-5">
                <h2 > Junior High </h2>
                <div class="h-3 bg-primary"> </div>
                <div>Ipsum, faucibus vitae aliquet nec, ullamcorper sit amet risus nullam eget felis eget nunc lobortis mattis aliquam faucibus purus in massa tempor nec feugiat? Ipsum suspendisse ultrices gravida dictum fusce?</div>

                <div>Ipsum, faucibus vitae aliquet nec, ullamcorper sit amet risus nullam eget felis eget nunc lobortis mattis aliquam faucibus purus in massa tempor nec feugiat? Ipsum suspendisse ultrices gravida dictum fusce?</div>


            </div>
            <div class=""></div>
        </div>
        <a href="/admission" class="btn btn-primary"> Enroll Now </a>
    </div>

    <div class="prose max-w-5xl mx-auto" id="senior-high">
        <div class="grid grid-cols-1fr md:grid-cols-[10fr_3fr] gap-5">
            <div class="mt-5">
                <h2 > Senior High </h2>
                <div class="h-2 bg-primary"> </div>
                <div>Ipsum, faucibus vitae aliquet nec, ullamcorper sit amet risus nullam eget felis eget nunc lobortis mattis aliquam faucibus purus in massa tempor nec feugiat? Ipsum suspendisse ultrices gravida dictum fusce?</div>
                <div>Ipsum, faucibus vitae aliquet nec, ullamcorper sit amet risus nullam eget felis eget nunc lobortis mattis aliquam faucibus purus in massa tempor nec feugiat? Ipsum suspendisse ultrices gravida dictum fusce?</div>

                <div class="bg-blue-50 p-5 rounded-lg max-w-1/2">
                    <h4 class="text-blue-800"> Offerred </h4>
                    <ul>
                        <li>Lorem Ipsum dolor set amet</li>
                        <li>Lorem Ipsum dolor set amet</li>
                        <li>Lorem Ipsum dolor set amet</li>
                    </ul>
                </div>
            </div>
            <div class="">

            </div>
        </div>
        <a href="/admission" class="btn btn-primary"> Enroll Now </a>
    </div>

    <div class="prose max-w-5xl mx-auto mt-10" id="college">
        <div class="grid grid-cols-1fr md:grid-cols-[10fr_3fr] gap-5">
            <div class="mt-5">
                <h2 class=""> College </h2>
                <div class="h-2 bg-primary"> </div>
                <div>Ipsum, faucibus vitae aliquet nec, ullamcorper sit amet risus nullam eget felis eget nunc lobortis mattis aliquam faucibus purus in massa tempor nec feugiat? Ipsum suspendisse ultrices gravida dictum fusce?</div>

                <div>Ipsum, faucibus vitae aliquet nec, ullamcorper sit amet risus nullam eget felis eget nunc lobortis mattis aliquam faucibus purus in massa tempor nec feugiat? Ipsum suspendisse ultrices gravida dictum fusce?</div>

                <div tabindex="0" class="collapse collapse-arrow bg-base-100 border-base-300 border">
                    <div class="collapse-title font-semibold"> Bachelor of Science in Nursing</div>
                    <div class="collapse-content text-sm">
                        Lorem Ipsum dolor set ameet
                    </div>
                </div>

                <div tabindex="0" class="collapse collapse-arrow bg-base-100 border-base-300 border">
                    <div class="collapse-title font-semibold"> Bachelor of Science in Information Techonology</div>
                    <div class="collapse-content text-sm">
                        <div>Mi tempus imperdiet nulla malesuada pellentesque elit eget gravida cum sociis natoque! Ipsum, vitae aliquet nec, ullamcorper sit amet risus nullam eget felis eget nunc lobortis mattis aliquam faucibus?</div>
                    </div>
                </div>
            </div>
            <div class="">

            </div>
        </div>
        <a href="/admission" class="btn btn-primary"> Enroll Now </a>
    </div>
@endsection
