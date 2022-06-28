<?php

return [
	'singletons' => [
		'ZnLib\\Wsdl\\Domain\\Interfaces\\Services\\RequestServiceInterface' => 'ZnLib\\Wsdl\\Domain\\Services\\RequestService',
		'ZnLib\\Wsdl\\Domain\\Interfaces\\Services\\TransportServiceInterface' => 'ZnLib\\Wsdl\\Domain\\Services\\TransportService',
		'ZnLib\\Wsdl\\Domain\\Interfaces\\Repositories\\TransportRepositoryInterface' => 'ZnLib\\Wsdl\\Domain\\Repositories\\Eloquent\\TransportRepository',
		'ZnLib\\Wsdl\\Domain\\Interfaces\\Repositories\\ClientRepositoryInterface' => 'ZnLib\\Wsdl\\Domain\\Repositories\\Wsdl\\ClientRepository',
//		'ZnLib\\Wsdl\\Domain\\Interfaces\\Repositories\\ServiceRepositoryInterface' => 'ZnLib\\Wsdl\\Domain\\Repositories\\File\\ServiceRepository',
	],
	'entities' => [
		'ZnLib\\Wsdl\\Domain\\Entities\\TransportEntity' => 'ZnLib\\Wsdl\\Domain\\Interfaces\\Repositories\\TransportRepositoryInterface',
		'ZnLib\\Wsdl\\Domain\\Entities\\ServiceEntity' => 'ZnLib\\Wsdl\\Domain\\Interfaces\\Repositories\\ServiceRepositoryInterface',
	],
];