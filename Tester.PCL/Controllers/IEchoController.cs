/*
 * Tester.PCL
 *
 * This file was automatically generated for Stamplay by APIMATIC v2.0 ( https://apimatic.io )
 */
using System;
using System.Collections.Generic;
using System.Dynamic;
using System.IO;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using APIMATIC.SDK.Common;
using APIMATIC.SDK.Http.Request;
using APIMATIC.SDK.Http.Response;
using APIMATIC.SDK.Http.Client;
using Tester.PCL.Models;

namespace Tester.PCL.Controllers
{
    public partial interface IEchoController
    {
        /// <summary>
        /// Echo's back the request
        /// </summary>
        /// <param name="input">Required parameter: Example: </param>
        /// <return>Returns the dynamic response from the API call</return>
        dynamic CreateJsonEcho(object input);

        /// <summary>
        /// Echo's back the request
        /// </summary>
        /// <param name="input">Required parameter: Example: </param>
        /// <return>Returns the dynamic response from the API call</return>
        Task<dynamic> CreateJsonEchoAsync(object input);

        /// <summary>
        /// Sends the request including any form params as JSON
        /// </summary>
        /// <param name="input">Required parameter: Example: </param>
        /// <return>Returns the dynamic response from the API call</return>
        dynamic CreateFormEcho(object input);

        /// <summary>
        /// Sends the request including any form params as JSON
        /// </summary>
        /// <param name="input">Required parameter: Example: </param>
        /// <return>Returns the dynamic response from the API call</return>
        Task<dynamic> CreateFormEchoAsync(object input);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="queryParameters">Additional optional query parameters are supported by this endpoint</param>
        /// <return>Returns the Models.EchoResponseModel response from the API call</return>
        Models.EchoResponseModel GetQueryEcho(Dictionary<string, object> queryParameters = null);

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <param name="queryParameters">Additional optional query parameters are supported by this endpoint</param>
        /// <return>Returns the Models.EchoResponseModel response from the API call</return>
        Task<Models.EchoResponseModel> GetQueryEchoAsync(Dictionary<string, object> queryParameters = null);

    }
} 