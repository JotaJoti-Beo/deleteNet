@extends('layouts.app')

@section('content')
    <p>
        <b style="color: red;">
            WARNING: <br />
            By clicking OK, the Internet will be deleted. <br />
            <br />
            This process cannot be undone and all systems will shut down! <br />
            <br />
            If you want to continue, click here: <br />
        </b>
        <br />
        <hr style="border-top: 1px solid #005D81" />
        <br />
        <b style="color: red;">
            Achtung: <br />
            Wenn sie auf OK klicken, wird das Internet gelöscht. <br />
            <br />
            Dieser Vorgang kann nicht rückgängig gemacht werden und alle Systeme werden heruntergefahren! <br />
            <br />
            Wenn Sie fortfahren wollen, klicken sie hier: <br />
        </b>
    </p>
    <br />
    <a href="{{ route('delete') }}" class="btn btn-danger mb-5" style="width: 50%">OK!</a>
@endsection
