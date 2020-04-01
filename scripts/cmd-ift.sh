#!/usr/bin/env bash

# This is a file for experimenting git command line.

set -o errexit

echo "Start git command line actions, using hub..."
hub --version
git branch

# Step: Creating an issue with the failed test details.
# -------------------------------------------------------

ISSUT_FILE_PATH="issue_details"
ISSUE_TITLE="Testing IFT CMD"
ISSUE_BODY_LINE1="Description of the IFT issue."
ISSUE_BODY_LINE2="With multiple lines."
ISSUE_LABEL1="Approver: Smijo"
ISSUE_LABEL2="Intermittently Failing Test"

echo "Creating issue in progress..."

# NEW_ISSUE_LINK=$(hub issue create -m "${ISSUE_TITLE}" -m "${ISSUE_BODY_LINE1}" -m "${ISSUE_BODY_LINE2}" -l "${ISSUE_LABEL1},${ISSUE_LABEL2}")


NEW_ISSUE_LINK=$(hub issue create -F ${ISSUT_FILE_PATH} -l "${ISSUE_LABEL1},${ISSUE_LABEL2}")

echo "This is the new issue: ${NEW_ISSUE_LINK}"
