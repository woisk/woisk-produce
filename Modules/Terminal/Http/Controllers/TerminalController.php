<?php

namespace Modules\Terminal\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Terminal\Repositories\BrowserRespo;
use Modules\Terminal\Repositories\ComputerName;
use Modules\Terminal\Repositories\DeviceType;
use Modules\Terminal\Repositories\DisplaySize;
use Modules\Terminal\Repositories\IPRespo;
use Modules\Terminal\Repositories\OSRespo;
use Modules\Terminal\Repositories\Source;
use Modules\Terminal\Repositories\SourceDomian;
use Modules\Terminal\Repositories\SourceParam;

class TerminalController extends Controller
{

    public function __construct(IPRespo $IPRespo, BrowserRespo $browserRespo,
                                ComputerName $computerName, DeviceType $deviceType, DisplaySize $displaySize,
                                OSRespo $OSRespo, Source $source, SourceParam $sourceParam, SourceDomian $sourceDomian)
    {
        $this->IPRespo = $IPRespo;
        $this->browser = $browserRespo;
        $this->computerName = $computerName;
        $this->deviceType = $deviceType;
        $this->displaySize = $displaySize;
        $this->OSRespo = $OSRespo;
        $this->source = $source;
        $this->sourceParam = $sourceParam;
        $this->sourceDomian = $sourceDomian;

    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index(Request $request)
    {

        $arr =[
            'ip'=>  $this->IPRespo->firstOrCreate($request),
            'browser'=> $this->browser->firstOrCreate($request),
            'name'=>    $this->computerName->firstOrCreate($request),
            'type'=>    $this->deviceType->firstOrCreate($request),
            'os'=>      $this->OSRespo->firstOrCreate($request),
            'size'=>    $this->displaySize->firstOrCreate('1920x1080'),
            'source'=>  $this->source->firstOrCreate('直接访问'),

            'param'=>   $this->sourceParam->firstOrCreate(12,'wd=13232&sc=987'),
            'domian'=>  $this->sourceDomian->firstOrCreate('http:www.baidu.com'),
        ];

        return $arr;


    }

    public
    function ip(Request $request)
    {

        return $this->IPRespo->numberIp($request->get('ip'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public
    function create()
    {
        return view('terminal::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public
    function store(Request $request)
    {
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public
    function show()
    {
        return view('terminal::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public
    function edit()
    {
        return view('terminal::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public
    function update(Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public
    function destroy()
    {
    }
}
