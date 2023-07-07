<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudbuild/v1/cloudbuild.proto

namespace GPBMetadata\Google\Devtools\Cloudbuild\V1;

class Cloudbuild
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Httpbody::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
��
.google/devtools/cloudbuild/v1/cloudbuild.protogoogle.devtools.cloudbuild.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/httpbody.protogoogle/api/resource.proto#google/longrunning/operations.protogoogle/protobuf/duration.protogoogle/protobuf/empty.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.proto"q
RetryBuildRequest2
name (	B$�A!
cloudbuild.googleapis.com/Build

project_id (	B�A
id (	B�A"�
RunBuildTriggerRequest9
name (	B+�A(
&cloudbuild.googleapis.com/BuildTrigger

project_id (	B�A

trigger_id (	B�A9
source (2).google.devtools.cloudbuild.v1.RepoSource"C
StorageSource
bucket (	
object (	

generation ("7
	GitSource
url (	
dir (	
revision (	"�

RepoSource

project_id (	
	repo_name (	
branch_name (	H 
tag_name (	H 

commit_sha (	H 
dir (	
invert_regex (S
substitutions	 (2<.google.devtools.cloudbuild.v1.RepoSource.SubstitutionsEntry4
SubstitutionsEntry
key (	
value (	:8B

revision"K
StorageSourceManifest
bucket (	
object (	

generation ("�
SourceF
storage_source (2,.google.devtools.cloudbuild.v1.StorageSourceH @
repo_source (2).google.devtools.cloudbuild.v1.RepoSourceH >

git_source (2(.google.devtools.cloudbuild.v1.GitSourceH W
storage_source_manifest (24.google.devtools.cloudbuild.v1.StorageSourceManifestH B
source"m

BuiltImage
name (	
digest (	A
push_timing (2\'.google.devtools.cloudbuild.v1.TimeSpanB�A"�
UploadedPythonPackage
uri (	>
file_hashes (2).google.devtools.cloudbuild.v1.FileHashesA
push_timing (2\'.google.devtools.cloudbuild.v1.TimeSpanB�A"�
UploadedMavenArtifact
uri (	>
file_hashes (2).google.devtools.cloudbuild.v1.FileHashesA
push_timing (2\'.google.devtools.cloudbuild.v1.TimeSpanB�A"�
UploadedNpmPackage
uri (	>
file_hashes (2).google.devtools.cloudbuild.v1.FileHashesA
push_timing (2\'.google.devtools.cloudbuild.v1.TimeSpanB�A"�
	BuildStep
name (	
env (	
args (	
dir (	

id (	
wait_for (	

entrypoint (	

secret_env (	6
volumes	 (2%.google.devtools.cloudbuild.v1.Volume<
timing
 (2\'.google.devtools.cloudbuild.v1.TimeSpanB�AA
pull_timing (2\'.google.devtools.cloudbuild.v1.TimeSpanB�A*
timeout (2.google.protobuf.Duration@
status (2+.google.devtools.cloudbuild.v1.Build.StatusB�A
allow_failure (
	exit_code (B�A
allow_exit_codes (
script (	"$
Volume
name (	
path (	"�
Results9
images (2).google.devtools.cloudbuild.v1.BuiltImage
build_step_images (	
artifact_manifest (	
num_artifacts (
build_step_outputs (@
artifact_timing (2\'.google.devtools.cloudbuild.v1.TimeSpanM
python_packages (24.google.devtools.cloudbuild.v1.UploadedPythonPackageM
maven_artifacts	 (24.google.devtools.cloudbuild.v1.UploadedMavenArtifactG
npm_packages (21.google.devtools.cloudbuild.v1.UploadedNpmPackage"`
ArtifactResult
location (	<
	file_hash (2).google.devtools.cloudbuild.v1.FileHashes"�
Build
name- (	B�A
id (	B�A

project_id (	B�A@
status (2+.google.devtools.cloudbuild.v1.Build.StatusB�A
status_detail (	B�A5
source (2%.google.devtools.cloudbuild.v1.Source7
steps (2(.google.devtools.cloudbuild.v1.BuildStep<
results
 (2&.google.devtools.cloudbuild.v1.ResultsB�A4
create_time (2.google.protobuf.TimestampB�A3

start_time (2.google.protobuf.TimestampB�A4
finish_time (2.google.protobuf.TimestampB�A*
timeout (2.google.protobuf.Duration
images (	,
	queue_ttl( (2.google.protobuf.Duration;
	artifacts% (2(.google.devtools.cloudbuild.v1.Artifacts
logs_bucket (	O
source_provenance (2/.google.devtools.cloudbuild.v1.SourceProvenanceB�A
build_trigger_id (	B�A<
options (2+.google.devtools.cloudbuild.v1.BuildOptions
log_url (	B�AN
substitutions (27.google.devtools.cloudbuild.v1.Build.SubstitutionsEntry
tags (	6
secrets  (2%.google.devtools.cloudbuild.v1.SecretE
timing! (20.google.devtools.cloudbuild.v1.Build.TimingEntryB�AC
approval, (2,.google.devtools.cloudbuild.v1.BuildApprovalB�A?
service_account* (	B&�A#
!iam.googleapis.com/ServiceAccountA
available_secrets/ (2&.google.devtools.cloudbuild.v1.SecretsC
warnings1 (2,.google.devtools.cloudbuild.v1.Build.WarningB�AK
failure_info3 (20.google.devtools.cloudbuild.v1.Build.FailureInfoB�A�
Warning
text (	G
priority (25.google.devtools.cloudbuild.v1.Build.Warning.Priority"F
Priority
PRIORITY_UNSPECIFIED 
INFO
WARNING	
ALERT�
FailureInfoJ
type (2<.google.devtools.cloudbuild.v1.Build.FailureInfo.FailureType
detail (	"�
FailureType
FAILURE_TYPE_UNSPECIFIED 
PUSH_FAILED
PUSH_IMAGE_NOT_FOUND
PUSH_NOT_AUTHORIZED
LOGGING_FAILURE
USER_BUILD_STEP
FETCH_SOURCE_FAILED4
SubstitutionsEntry
key (	
value (	:8V
TimingEntry
key (	6
value (2\'.google.devtools.cloudbuild.v1.TimeSpan:8"�
Status
STATUS_UNKNOWN 
PENDING


QUEUED
WORKING
SUCCESS
FAILURE
INTERNAL_ERROR
TIMEOUT
	CANCELLED
EXPIRED	:�A|
cloudbuild.googleapis.com/Build!projects/{project}/builds/{build}6projects/{project}/locations/{location}/builds/{build}"�
	Artifacts
images (	I
objects (28.google.devtools.cloudbuild.v1.Artifacts.ArtifactObjectsO
maven_artifacts (26.google.devtools.cloudbuild.v1.Artifacts.MavenArtifactO
python_packages (26.google.devtools.cloudbuild.v1.Artifacts.PythonPackageI
npm_packages (23.google.devtools.cloudbuild.v1.Artifacts.NpmPackagep
ArtifactObjects
location (	
paths (	<
timing (2\'.google.devtools.cloudbuild.v1.TimeSpanB�Ai
MavenArtifact

repository (	
path (	
artifact_id (	
group_id (	
version (	2
PythonPackage

repository (	
paths (	6

NpmPackage

repository (	
package_path (	"h
TimeSpan.

start_time (2.google.protobuf.Timestamp,
end_time (2.google.protobuf.Timestamp"M
BuildOperationMetadata3
build (2$.google.devtools.cloudbuild.v1.Build"�
SourceProvenanceM
resolved_storage_source (2,.google.devtools.cloudbuild.v1.StorageSourceG
resolved_repo_source (2).google.devtools.cloudbuild.v1.RepoSource^
 resolved_storage_source_manifest	 (24.google.devtools.cloudbuild.v1.StorageSourceManifestY
file_hashes (2?.google.devtools.cloudbuild.v1.SourceProvenance.FileHashesEntryB�A\\
FileHashesEntry
key (	8
value (2).google.devtools.cloudbuild.v1.FileHashes:8"D

FileHashes6
	file_hash (2#.google.devtools.cloudbuild.v1.Hash"�
Hash:
type (2,.google.devtools.cloudbuild.v1.Hash.HashType
value ("5
HashType
NONE 

SHA256
MD5

SHA512"�
SecretsJ
secret_manager (22.google.devtools.cloudbuild.v1.SecretManagerSecret;
inline (2+.google.devtools.cloudbuild.v1.InlineSecret"�
InlineSecret<
kms_key_name (	B&�A#
!cloudkms.googleapis.com/CryptoKeyH
env_map (27.google.devtools.cloudbuild.v1.InlineSecret.EnvMapEntry-
EnvMapEntry
key (	
value (:8"i
SecretManagerSecretE
version_name (	B/�A,
*secretmanager.googleapis.com/SecretVersion
env (	"�
Secret
kms_key_name (	H

secret_env (24.google.devtools.cloudbuild.v1.Secret.SecretEnvEntry0
SecretEnvEntry
key (	
value (:8"�
CreateBuildRequest4
parent (	B$�A!cloudbuild.googleapis.com/Build

project_id (	B�A8
build (2$.google.devtools.cloudbuild.v1.BuildB�A"o
GetBuildRequest2
name (	B$�A!
cloudbuild.googleapis.com/Build

project_id (	B�A
id (	B�A"�
ListBuildsRequest4
parent	 (	B$�A!cloudbuild.googleapis.com/Build

project_id (	B�A
	page_size (

page_token (	
filter (	"c
ListBuildsResponse4
builds (2$.google.devtools.cloudbuild.v1.Build
next_page_token (	"r
CancelBuildRequest2
name (	B$�A!
cloudbuild.googleapis.com/Build

project_id (	B�A
id (	B�A"p
ApproveBuildRequest
name (	B�AF
approval_result (2-.google.devtools.cloudbuild.v1.ApprovalResult"�
BuildApprovalF
state (22.google.devtools.cloudbuild.v1.BuildApproval.StateB�AB
config (2-.google.devtools.cloudbuild.v1.ApprovalConfigB�AB
result (2-.google.devtools.cloudbuild.v1.ApprovalResultB�A"V
State
STATE_UNSPECIFIED 
PENDING
APPROVED
REJECTED
	CANCELLED"+
ApprovalConfig
approval_required ("�
ApprovalResult
approver_account (	B�A6
approval_time (2.google.protobuf.TimestampB�AM
decision (26.google.devtools.cloudbuild.v1.ApprovalResult.DecisionB�A
comment (	B�A
url (	B�A"@
Decision
DECISION_UNSPECIFIED 
APPROVED
REJECTED"�
BuildTrigger
resource_name" (	
id (	B�A
description
 (	
name (	
tags (	C
trigger_template (2).google.devtools.cloudbuild.v1.RepoSourceA
github (21.google.devtools.cloudbuild.v1.GitHubEventsConfigB
pubsub_config (2+.google.devtools.cloudbuild.v1.PubsubConfigD
webhook_config (2,.google.devtools.cloudbuild.v1.WebhookConfig

autodetect (H 5
build (2$.google.devtools.cloudbuild.v1.BuildH 
filename (	H 4
create_time (2.google.protobuf.TimestampB�A
disabled	 (U
substitutions (2>.google.devtools.cloudbuild.v1.BuildTrigger.SubstitutionsEntry
ignored_files (	
included_files (	
filter (	B�A?
service_account! (	B&�A#
!iam.googleapis.com/ServiceAccountU
repository_event_config\' (24.google.devtools.cloudbuild.v1.RepositoryEventConfig4
SubstitutionsEntry
key (	
value (	:8:��A�
&cloudbuild.googleapis.com/BuildTrigger%projects/{project}/triggers/{trigger}:projects/{project}/locations/{location}/triggers/{trigger}*triggers2triggerB
build_template"�
RepositoryEventConfig=

repository (	B)�A&
$cloudbuild.googleapis.com/Repositorya
repository_type (2C.google.devtools.cloudbuild.v1.RepositoryEventConfig.RepositoryTypeB�AH
pull_request (20.google.devtools.cloudbuild.v1.PullRequestFilterH 9
push (2).google.devtools.cloudbuild.v1.PushFilterH "k
RepositoryType
REPOSITORY_TYPE_UNSPECIFIED 

GITHUB
GITHUB_ENTERPRISE
GITLAB_ENTERPRISEB
filter"�
GitHubEventsConfig
installation_id (B
owner (	
name (	H
pull_request (20.google.devtools.cloudbuild.v1.PullRequestFilterH 9
push (2).google.devtools.cloudbuild.v1.PushFilterH B
event"�
PubsubConfig@
subscription (	B*�A�A$
"pubsub.googleapis.com/Subscription/
topic (	B �A
pubsub.googleapis.com/TopicE
service_account_email (	B&�A#
!iam.googleapis.com/ServiceAccount@
state (21.google.devtools.cloudbuild.v1.PubsubConfig.State"s
State
STATE_UNSPECIFIED 
OK
SUBSCRIPTION_DELETED
TOPIC_DELETED
SUBSCRIPTION_MISCONFIGURED"�
WebhookConfigD
secret (	B2�A�A,
*secretmanager.googleapis.com/SecretVersionH A
state (22.google.devtools.cloudbuild.v1.WebhookConfig.State":
State
STATE_UNSPECIFIED 
OK
SECRET_DELETEDB
auth_method"�
PullRequestFilter
branch (	H X
comment_control (2?.google.devtools.cloudbuild.v1.PullRequestFilter.CommentControl
invert_regex ("r
CommentControl
COMMENTS_DISABLED 
COMMENTS_ENABLED3
/COMMENTS_ENABLED_FOR_EXTERNAL_CONTRIBUTORS_ONLYB	
git_ref"N

PushFilter
branch (	H 
tag (	H 
invert_regex (B	
git_ref"�
CreateBuildTriggerRequest;
parent (	B+�A(&cloudbuild.googleapis.com/BuildTrigger

project_id (	B�AA
trigger (2+.google.devtools.cloudbuild.v1.BuildTriggerB�A"�
GetBuildTriggerRequest9
name (	B+�A(
&cloudbuild.googleapis.com/BuildTrigger

project_id (	B�A

trigger_id (	B�A"�
ListBuildTriggersRequest;
parent (	B+�A(&cloudbuild.googleapis.com/BuildTrigger

project_id (	B�A
	page_size (

page_token (	"s
ListBuildTriggersResponse=
triggers (2+.google.devtools.cloudbuild.v1.BuildTrigger
next_page_token (	"�
DeleteBuildTriggerRequest9
name (	B+�A(
&cloudbuild.googleapis.com/BuildTrigger

project_id (	B�A

trigger_id (	B�A"�
UpdateBuildTriggerRequest

project_id (	B�A

trigger_id (	B�AA
trigger (2+.google.devtools.cloudbuild.v1.BuildTriggerB�A"�
BuildOptionsL
source_provenance_hash (2,.google.devtools.cloudbuild.v1.Hash.HashTypeY
requested_verify_option (28.google.devtools.cloudbuild.v1.BuildOptions.VerifyOptionM
machine_type (27.google.devtools.cloudbuild.v1.BuildOptions.MachineType
disk_size_gb ([
substitution_option (2>.google.devtools.cloudbuild.v1.BuildOptions.SubstitutionOption
dynamic_substitutions (\\
log_streaming_option (2>.google.devtools.cloudbuild.v1.BuildOptions.LogStreamingOption
worker_pool (	BI
pool (26.google.devtools.cloudbuild.v1.BuildOptions.PoolOptionB�AH
logging (27.google.devtools.cloudbuild.v1.BuildOptions.LoggingMode
env (	

secret_env (	6
volumes (2%.google.devtools.cloudbuild.v1.Volumep
default_logs_bucket_behavior (2E.google.devtools.cloudbuild.v1.BuildOptions.DefaultLogsBucketBehaviorB�AE

PoolOption7
name (	B)�A&
$cloudbuild.googleapis.com/WorkerPool".
VerifyOption
NOT_VERIFIED 
VERIFIED"w
MachineType
UNSPECIFIED 
N1_HIGHCPU_8
N1_HIGHCPU_32
E2_HIGHCPU_8
E2_HIGHCPU_32
	E2_MEDIUM"5
SubstitutionOption

MUST_MATCH 
ALLOW_LOOSE"G
LogStreamingOption
STREAM_DEFAULT 
	STREAM_ON

STREAM_OFF"|
LoggingMode
LOGGING_UNSPECIFIED 

LEGACY
GCS_ONLY
STACKDRIVER_ONLY
CLOUD_LOGGING_ONLY
NONE"i
DefaultLogsBucketBehavior,
(DEFAULT_LOGS_BUCKET_BEHAVIOR_UNSPECIFIED 
REGIONAL_USER_OWNED_BUCKET"�
ReceiveTriggerWebhookRequest
name (	"
body (2.google.api.HttpBody

project_id (	
trigger (	
secret (	"
ReceiveTriggerWebhookResponse"�

WorkerPool
name (	B�A
display_name (	
uid (	B�AO
annotations (2:.google.devtools.cloudbuild.v1.WorkerPool.AnnotationsEntry4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A4
delete_time (2.google.protobuf.TimestampB�AC
state (2/.google.devtools.cloudbuild.v1.WorkerPool.StateB�AT
private_pool_v1_config (22.google.devtools.cloudbuild.v1.PrivatePoolV1ConfigH 
etag (	B�A2
AnnotationsEntry
key (	
value (	:8"T
State
STATE_UNSPECIFIED 
CREATING
RUNNING
DELETING
DELETED:��A�
$cloudbuild.googleapis.com/WorkerPoolAprojects/{project}/locations/{location}/workerPools/{worker_pool}*workerPools2
workerPoolRB
config"�
PrivatePoolV1ConfigV
worker_config (2?.google.devtools.cloudbuild.v1.PrivatePoolV1Config.WorkerConfigX
network_config (2@.google.devtools.cloudbuild.v1.PrivatePoolV1Config.NetworkConfig:
WorkerConfig
machine_type (	
disk_size_gb (�
NetworkConfigA
peered_network (	B)�A�A�A 
compute.googleapis.com/Networkd
egress_option (2M.google.devtools.cloudbuild.v1.PrivatePoolV1Config.NetworkConfig.EgressOption$
peered_network_ip_range (	B�A"V
EgressOption
EGRESS_OPTION_UNSPECIFIED 
NO_PUBLIC_EGRESS
PUBLIC_EGRESS"�
CreateWorkerPoolRequest9
parent (	B)�A�A#
!locations.googleapis.com/LocationC
worker_pool (2).google.devtools.cloudbuild.v1.WorkerPoolB�A
worker_pool_id (	B�A�A
validate_only ("R
GetWorkerPoolRequest:
name (	B,�A�A&
$cloudbuild.googleapis.com/WorkerPool"�
DeleteWorkerPoolRequest:
name (	B,�A�A&
$cloudbuild.googleapis.com/WorkerPool
etag (	
allow_missing (
validate_only ("�
UpdateWorkerPoolRequestC
worker_pool (2).google.devtools.cloudbuild.v1.WorkerPoolB�A/
update_mask (2.google.protobuf.FieldMask
validate_only ("z
ListWorkerPoolsRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
	page_size (

page_token (	"s
ListWorkerPoolsResponse?
worker_pools (2).google.devtools.cloudbuild.v1.WorkerPool
next_page_token (	"�
!CreateWorkerPoolOperationMetadata>
worker_pool (	B)�A&
$cloudbuild.googleapis.com/WorkerPool/
create_time (2.google.protobuf.Timestamp1
complete_time (2.google.protobuf.Timestamp"�
!UpdateWorkerPoolOperationMetadata>
worker_pool (	B)�A&
$cloudbuild.googleapis.com/WorkerPool/
create_time (2.google.protobuf.Timestamp1
complete_time (2.google.protobuf.Timestamp"�
!DeleteWorkerPoolOperationMetadata>
worker_pool (	B)�A&
$cloudbuild.googleapis.com/WorkerPool/
create_time (2.google.protobuf.Timestamp1
complete_time (2.google.protobuf.Timestamp2�#

CloudBuild�
CreateBuild1.google.devtools.cloudbuild.v1.CreateBuildRequest.google.longrunning.Operation"����^" /v1/projects/{project_id}/builds:buildZ3"*/v1/{parent=projects/*/locations/*}/builds:build�Aproject_id,build�A
BuildBuildOperationMetadata�
GetBuild..google.devtools.cloudbuild.v1.GetBuildRequest$.google.devtools.cloudbuild.v1.Build"k���U%/v1/projects/{project_id}/builds/{id}Z,*/v1/{name=projects/*/locations/*/builds/*}�Aproject_id,id�

ListBuilds0.google.devtools.cloudbuild.v1.ListBuildsRequest1.google.devtools.cloudbuild.v1.ListBuildsResponse"j���P /v1/projects/{project_id}/buildsZ,*/v1/{parent=projects/*/locations/*}/builds�Aproject_id,filter�
CancelBuild1.google.devtools.cloudbuild.v1.CancelBuildRequest$.google.devtools.cloudbuild.v1.Build"���i",/v1/projects/{project_id}/builds/{id}:cancel:*Z6"1/v1/{name=projects/*/locations/*/builds/*}:cancel:*�Aproject_id,id�

RetryBuild0.google.devtools.cloudbuild.v1.RetryBuildRequest.google.longrunning.Operation"����g"+/v1/projects/{project_id}/builds/{id}:retry:*Z5"0/v1/{name=projects/*/locations/*/builds/*}:retry:*�Aproject_id,id�A
BuildBuildOperationMetadata�
ApproveBuild2.google.devtools.cloudbuild.v1.ApproveBuildRequest.google.longrunning.Operation"����d"&/v1/{name=projects/*/builds/*}:approve:*Z7"2/v1/{name=projects/*/locations/*/builds/*}:approve:*�Aname,approval_result�A
BuildBuildOperationMetadata�
CreateBuildTrigger8.google.devtools.cloudbuild.v1.CreateBuildTriggerRequest+.google.devtools.cloudbuild.v1.BuildTrigger"����f""/v1/projects/{project_id}/triggers:triggerZ7",/v1/{parent=projects/*/locations/*}/triggers:trigger�Aproject_id,trigger�
GetBuildTrigger5.google.devtools.cloudbuild.v1.GetBuildTriggerRequest+.google.devtools.cloudbuild.v1.BuildTrigger"���a//v1/projects/{project_id}/triggers/{trigger_id}Z.,/v1/{name=projects/*/locations/*/triggers/*}�Aproject_id,trigger_id�
ListBuildTriggers7.google.devtools.cloudbuild.v1.ListBuildTriggersRequest8.google.devtools.cloudbuild.v1.ListBuildTriggersResponse"g���T"/v1/projects/{project_id}/triggersZ.,/v1/{parent=projects/*/locations/*}/triggers�A
project_id�
DeleteBuildTrigger8.google.devtools.cloudbuild.v1.DeleteBuildTriggerRequest.google.protobuf.Empty"���a*//v1/projects/{project_id}/triggers/{trigger_id}Z.*,/v1/{name=projects/*/locations/*/triggers/*}�Aproject_id,trigger_id�
UpdateBuildTrigger8.google.devtools.cloudbuild.v1.UpdateBuildTriggerRequest+.google.devtools.cloudbuild.v1.BuildTrigger"�����2//v1/projects/{project_id}/triggers/{trigger_id}:triggerZH2=/v1/{trigger.resource_name=projects/*/locations/*/triggers/*}:trigger�Aproject_id,trigger_id,trigger�
RunBuildTrigger5.google.devtools.cloudbuild.v1.RunBuildTriggerRequest.google.longrunning.Operation"����t"3/v1/projects/{project_id}/triggers/{trigger_id}:run:sourceZ5"0/v1/{name=projects/*/locations/*/triggers/*}:run:*�Aproject_id,trigger_id,source�A
BuildBuildOperationMetadata�
ReceiveTriggerWebhook;.google.devtools.cloudbuild.v1.ReceiveTriggerWebhookRequest<.google.devtools.cloudbuild.v1.ReceiveTriggerWebhookResponse"����z"4/v1/projects/{project_id}/triggers/{trigger}:webhook:bodyZ<"4/v1/{name=projects/*/locations/*/triggers/*}:webhook:body�
CreateWorkerPool6.google.devtools.cloudbuild.v1.CreateWorkerPoolRequest.google.longrunning.Operation"����>"//v1/{parent=projects/*/locations/*}/workerPools:worker_pool�A!parent,worker_pool,worker_pool_id�A/

WorkerPool!CreateWorkerPoolOperationMetadata�
GetWorkerPool3.google.devtools.cloudbuild.v1.GetWorkerPoolRequest).google.devtools.cloudbuild.v1.WorkerPool">���1//v1/{name=projects/*/locations/*/workerPools/*}�Aname�
DeleteWorkerPool6.google.devtools.cloudbuild.v1.DeleteWorkerPoolRequest.google.longrunning.Operation"{���1*//v1/{name=projects/*/locations/*/workerPools/*}�Aname�A:
google.protobuf.Empty!DeleteWorkerPoolOperationMetadata�
UpdateWorkerPool6.google.devtools.cloudbuild.v1.UpdateWorkerPoolRequest.google.longrunning.Operation"����J2;/v1/{worker_pool.name=projects/*/locations/*/workerPools/*}:worker_pool�Aworker_pool,update_mask�A/

WorkerPool!UpdateWorkerPoolOperationMetadata�
ListWorkerPools5.google.devtools.cloudbuild.v1.ListWorkerPoolsRequest6.google.devtools.cloudbuild.v1.ListWorkerPoolsResponse"@���1//v1/{parent=projects/*/locations/*}/workerPools�AparentM�Acloudbuild.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
com.google.cloudbuild.v1PZAcloud.google.com/go/cloudbuild/apiv1/v2/cloudbuildpb;cloudbuildpb�GCB�Google.Cloud.CloudBuild.V1�Google\\Cloud\\Build\\V1�Google::Cloud::Build::V1�AN
compute.googleapis.com/Network,projects/{project}/global/networks/{network}�AY
!iam.googleapis.com/ServiceAccount4projects/{project}/serviceAccounts/{service_account}�AJ
#secretmanager.googleapis.com/Secret#projects/{project}/secrets/{secret}�Ad
*secretmanager.googleapis.com/SecretVersion6projects/{project}/secrets/{secret}/versions/{version}�Ap
!cloudkms.googleapis.com/CryptoKeyKprojects/{project}/locations/{location}/keyRings/{keyring}/cryptoKeys/{key}�AU
"pubsub.googleapis.com/Subscription/projects/{project}/subscriptions/{subscription}�A@
pubsub.googleapis.com/Topic!projects/{project}/topics/{topic}�A�
$cloudbuild.googleapis.com/RepositoryZprojects/{project}/locations/{location}/connections/{connection}/repositories/{repository}bproto3'
        , true);

        static::$is_initialized = true;
    }
}

