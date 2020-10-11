@extends('layouts.app')

@section('content')
    <p>
        deletion is in progress: <br />
        <span class="deletion-text-en">
            deleting HTML files
        </span>
    </p>
    <hr style="border-top: 1px solid #005D81" />
    <p>
        Löschung läuft: <br />
        <span class="deletion-text-de">
            HTML Dateien werden gelöscht
        </span>
    </p>

    <div class="progress deletion-bar">
        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 1%"></div>
    </div>

    <script type="application/javascript">
        $(document).ready(function (){
            setTimeout(function (){
                setApache()
            }, 3000);

            setTimeout(function (){
                setNginx()
            }, 5000);

            setTimeout(function (){
                killBIND()
            }, 8000);

            setTimeout(function (){
                killSelf()
            }, 10000);

            setTimeout(function (){
                cleanup()
            }, 11000);

            setTimeout(function (){
                completed()
            }, 12000);

            setTimeout(function (){
                redirect();
            }, 15000);
        });

        function setApache(){
            $('.deletion-text-en').text("Test");
            $('.deletion-text-de').text("Test");
            $('.progress-bar').attr("aria-valuenow", "32").css('width', "32%");
        }

        function setNginx(){
            $('.deletion-text-en').text("Test");
            $('.deletion-text-de').text("Test");
            $('.progress-bar').attr("aria-valuenow", "46").css('width', "46%");
        }

        function killBIND(){
            $('.deletion-text-en').text("Test");
            $('.deletion-text-de').text("Test");
            $('.progress-bar').attr("aria-valuenow", "67").css('width', "67%");
        }

        function killSelf(){
            $('.deletion-text-en').text("Test");
            $('.deletion-text-de').text("Test");
            $('.progress-bar').attr("aria-valuenow", "89").css('width', "89%");
        }

        function cleanup(){
            $('.deletion-text-en').text("Test");
            $('.deletion-text-de').text("Test");
            $('.progress-bar').attr("aria-valuenow", "99").css('width', "99%");
        }

        function completed(){
            $('.deletion-text-en').text("Test");
            $('.deletion-text-de').text("Test");
            $('.progress-bar').attr("aria-valuenow", "100").css('width', "100%");
        }

        function redirect(){
            location.href = 'completed';
        }
    </script>
@endsection

