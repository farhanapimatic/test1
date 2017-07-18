/*
 * Tester.Tests
 *
 * This file was automatically generated for Stamplay by APIMATIC v2.0 ( https://apimatic.io )
 */
using System;
using System.Collections.Generic;
using System.Globalization;
using System.IO;
using System.Threading.Tasks;
using Newtonsoft.Json.Converters;
using APIMATIC.SDK.Common; 
using APIMATIC.SDK.Http.Client;
using APIMATIC.SDK.Http.Response;
using Tester.Tests.Helpers;
using NUnit.Framework;
using Tester.PCL;
using Tester.PCL.Controllers;
using Tester.PCL.Models;
using Tester.PCL.Exceptions;

namespace Tester.Tests
{
    [TestFixture]
    public class TemplateParamsControllerTest : ControllerTestBase
    {
        /// <summary>
        /// Controller instance (for all tests)
        /// </summary>
        private static ITemplateParamsController controller;

        /// <summary>
        /// Setup test class
        /// </summary>
        [SetUp]
        public static void SetUpClass()
        {
            controller = GetClient().TemplateParams;
            applyConfiguration();
        }

        /// <summary>
        /// TODO: Add description for test TestSendStringArray 
        /// </summary>
        [Test]
        public async Task TestSendStringArray() 
        {
            // Parameters for the API call
            List<string> strings = APIHelper.JsonDeserialize<List<string>>("[\"abc\", \"def\"]");

            // Perform API call
            EchoResponseModel result = null;

            try
            {
                result = await controller.GetSendStringArrayAsync(strings);
            }
            catch(APIException) {};

            // Test response code
            Assert.AreEqual(200, httpCallBackHandler.Response.StatusCode,
                    "Status should be 200");

            // Test whether the captured response is as we expected
            Assert.IsNotNull(result, "Result should exist");

            Assert.IsTrue(TestHelper.IsJsonObjectProperSubsetOf(
                    "{\"path\":\"/abc/def\"}", 
                    TestHelper.ConvertStreamToString(httpCallBackHandler.Response.RawBody), 
                    true, true, false),
                    "Response body should have matching keys");
        }

    }
}