var data = [
{	
	"estado": "SP", 
	"regiao": "Sudeste", 	
	"totalEmpregos": 262000
}, 

{	
	"estado": "MG", 
	"regiao": "Sudeste",	
	"totalEmpregos": 70400
}, 

{	
	"estado": "RJ", 
	"regiao": "Sudeste",	
	"totalEmpregos": 13800
}, 

{	
	"estado": "ES", 
	"regiao": "Sudeste",
	"totalEmpregos": 1160
},

{	
	"estado": "RS",
	"regiao": "Sul", 
	"totalEmpregos": 49400 
},

{	
	"estado": "SC",
	"regiao": "Sul", 
	"totalEmpregos": 15800
}, 
{	
	"estado": "PR",
	"regiao": "Sul", 
	"totalEmpregos": 42000
}, 
{	
	"estado": "BA",
	"regiao": "Nordeste", 
	"totalEmpregos": 9460 
}, 
{	
	"estado": "SE",
	"regiao": "Nordeste", 
	"totalEmpregos": 2250
}, 
{	
	"estado": "AL",
	"regiao": "Nordeste", 
	"totalEmpregos": 195
}, 
{	
	"estado": "PE",
	"regiao": "Nordeste",
	"totalEmpregos": 4600 
}, 
{	
	"estado": "PB",
 	"regiao": "Nordeste",
	"totalEmpregos": 172
}, 
{	
	"estado": "RN",
	"regiao": "Nordeste",
	"totalEmpregos": 294
}, 
{	
	"estado": "CE",
	"regiao": "Nordeste",
	"totalEmpregos": 2350 
}, 
{	
	"estado": "PI",
	"regiao": "Nordeste", 
	"totalEmpregos": 295
}, 
{	
	"estado": "MA",
	"regiao": "Nordeste", 
	"totalEmpregos": 254
}, 
{	
	"estado": "TO",
	"regiao": "Centro-Oeste", 
	"totalEmpregos": 284
}, 
{	
	"estado": "GO", 
	"regiao": "Centro-Oeste", 
	"totalEmpregos": 6930
}, 
{	
	"estado": "DF", 
	"regiao": "Centro-Oeste", 	
	"totalEmpregos": 220
}, 
{	
	"estado": "MS",
	"regiao": "Centro-Oeste",  
	"totalEmpregos": 449
}, 
{	
	"estado": "MT",
	"regiao": "Centro-Oeste", 
	"totalEmpregos": 772
}, 
{	
	"estado": "RO",
 	"regiao": "Norte", 
	"totalEmpregos": 465
}, 
{	
	"estado": "AC",
	"regiao": "Norte", 	 
	"totalEmpregos": 61
}, 
{	
	"estado": "AM",
	"regiao": "Norte",  
	"totalEmpregos": 4900
}, 
{	
	"estado": "RR",
	"regiao": "Norte",  
	"totalEmpregos": 19
}, 
{	
	"estado": "AP", 
	"regiao": "Norte", 	
	"totalEmpregos": 24
}, 
{	
	"estado": "PA", 
	"regiao": "Norte", 	
	"totalEmpregos": 522 
} 
].map(function(d) {
	return {
		estado : d.estado,
		jobs     : parseInt(d.totalEmpregos),
		regiao      : d.regiao
	};
});
