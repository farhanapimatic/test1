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
    public partial interface IErrorCodesController
    {
        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <return>Returns the dynamic response from the API call</return>
        dynamic Get401();

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <return>Returns the dynamic response from the API call</return>
        Task<dynamic> Get401Async();

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <return>Returns the dynamic response from the API call</return>
        dynamic Get500();

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <return>Returns the dynamic response from the API call</return>
        Task<dynamic> Get500Async();

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <return>Returns the dynamic response from the API call</return>
        dynamic Get400();

        /// <summary>
        /// TODO: type endpoint description here
        /// </summary>
        /// <return>Returns the dynamic response from the API call</return>
        Task<dynamic> Get400Async();

    }
} 