<?php
/**
 * ApprovalApiTest
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Bouw7 API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.27
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the endpoint.
 */

namespace Swagger\Client;

use \Swagger\Client\Configuration;
use \Swagger\Client\ApiException;
use \Swagger\Client\ObjectSerializer;

/**
 * ApprovalApiTest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ApprovalApiTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test case for deleteApprovalCriteria
     *
     * Delete the given approval criteria..
     *
     */
    public function testDeleteApprovalCriteria()
    {
    }

    /**
     * Test case for deleteApprovalWorkflow
     *
     * Delete the given approval workflow..
     *
     */
    public function testDeleteApprovalWorkflow()
    {
    }

    /**
     * Test case for findDefaultApprovalSettings
     *
     * Find the default approval settings for the current organization..
     *
     */
    public function testFindDefaultApprovalSettings()
    {
    }

    /**
     * Test case for findMatchingApprovalCriteria
     *
     * Find the matching approval workflow based on the criteria with the highest score for the given schema..
     *
     */
    public function testFindMatchingApprovalCriteria()
    {
    }

    /**
     * Test case for getApprovalTemplateCriteria
     *
     * Returns a single approval template criteria based on the given ID..
     *
     */
    public function testGetApprovalTemplateCriteria()
    {
    }

    /**
     * Test case for getApprovalTemplateWorkflow
     *
     * Returns a single approval template workflow based on the given ID, duplicate approvers are not filtered out!.
     *
     */
    public function testGetApprovalTemplateWorkflow()
    {
    }

    /**
     * Test case for getCriteriaTypes
     *
     * Retrieve all approval template criteria types..
     *
     */
    public function testGetCriteriaTypes()
    {
    }

    /**
     * Test case for getWorkflowTypes
     *
     * Retrieve all possible types with sub-types for an approval workflow..
     *
     */
    public function testGetWorkflowTypes()
    {
    }

    /**
     * Test case for listApprovalCriteria
     *
     * Return a list of all approval criteria associated with the organization..
     *
     */
    public function testListApprovalCriteria()
    {
    }

    /**
     * Test case for listApprovalWorkflows
     *
     * Returns a list of approval workflows for the organization of the current authenticated user. Use HQL to filter for specific items..
     *
     */
    public function testListApprovalWorkflows()
    {
    }

    /**
     * Test case for listPendingApprovalsAssignedToMe
     *
     * List all pending approvals for the current authenticated user..
     *
     */
    public function testListPendingApprovalsAssignedToMe()
    {
    }

    /**
     * Test case for postApprovalCriteria
     *
     * Create or update the approval criteria with the schema..
     *
     */
    public function testPostApprovalCriteria()
    {
    }

    /**
     * Test case for postDefaultApprovalSettings
     *
     * Update the default approval settings for the current organization..
     *
     */
    public function testPostDefaultApprovalSettings()
    {
    }

    /**
     * Test case for postWorkflow
     *
     * Create or update the approval workflow with the schema..
     *
     */
    public function testPostWorkflow()
    {
    }

    /**
     * Test case for voteOnContract
     *
     * Vote on a contract approval..
     *
     */
    public function testVoteOnContract()
    {
    }

    /**
     * Test case for voteOnPurchaseInvoice
     *
     * Vote on a purchase invoice approval..
     *
     */
    public function testVoteOnPurchaseInvoice()
    {
    }
}