<?php
/**
 * Copyright 2014 David T. Sadler
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace DTS\eBaySDK\Trading\Enums;

/**
 *
 */
class NotificationEventTypeCodeType
{
    const ACCOUNT_SUMMARY = 'AccountSummary';
    const ACCOUNT_SUSPENDED = 'AccountSuspended';
    const ADD_TO_BID_GROUP = 'AddToBidGroup';
    const ADD_TO_WATCH_LIST = 'AddToWatchList';
    const ASK_SELLER_QUESTION = 'AskSellerQuestion';
    const AUCTION_CHECKOUT_COMPLETE = 'AuctionCheckoutComplete';
    const BEST_OFFER = 'BestOffer';
    const BEST_OFFER_DECLINED = 'BestOfferDeclined';
    const BEST_OFFER_PLACED = 'BestOfferPlaced';
    const BID_ITEM_ENDING_SOON = 'BidItemEndingSoon';
    const BID_PLACED = 'BidPlaced';
    const BID_RECEIVED = 'BidReceived';
    const BULK_DATA_EXCHANGE_JOB_COMPLETED = 'BulkDataExchangeJobCompleted';
    const BUYER_RESPONSE_DISPUTE = 'BuyerResponseDispute';
    const CHECKOUT = 'Checkout';
    const CHECKOUT_BUYER_REQUESTS_TOTAL = 'CheckoutBuyerRequestsTotal';
    const COUNTER_OFFER_RECEIVED = 'CounterOfferReceived';
    const CUSTOM_CODE = 'CustomCode';
    const EBN_ORDER_CANCELED = 'EBNOrderCanceled';
    const EBN_ORDER_PICKED_UP = 'EBNOrderPickedUp';
    const EBP_APPEALED_CASE = 'EBPAppealedCase';
    const EBP_CLOSED_APPEAL = 'EBPClosedAppeal';
    const EBP_CLOSED_CASE = 'EBPClosedCase';
    const EBP_ESCALATED_CASE = 'EBPEscalatedCase';
    const EBP_MY_PAYMENT_DUE = 'EBPMyPaymentDue';
    const EBP_MY_RESPONSE_DUE = 'EBPMyResponseDue';
    const EBP_ON_HOLD_CASE = 'EBPOnHoldCase';
    const EBP_OTHER_PARTY_RESPONSE_DUE = 'EBPOtherPartyResponseDue';
    const EBP_PAYMENT_DONE = 'EBPPaymentDone';
    const EMAIL_ADDRESS_CHANGED = 'EmailAddressChanged';
    const END_OF_AUCTION = 'EndOfAuction';
    const FEEDBACK = 'Feedback';
    const FEEDBACK_FOR_SELLER = 'FeedbackForSeller';
    const FEEDBACK_LEFT = 'FeedbackLeft';
    const FEEDBACK_RECEIVED = 'FeedbackReceived';
    const FEEDBACK_STAR_CHANGED = 'FeedbackStarChanged';
    const FIXED_PRICE_TRANSACTION = 'FixedPriceTransaction';
    const INR_BUYER_CLOSED_DISPUTE = 'INRBuyerClosedDispute';
    const INR_BUYER_OPENED_DISPUTE = 'INRBuyerOpenedDispute';
    const INR_BUYER_RESPONDED_TO_DISPUTE = 'INRBuyerRespondedToDispute';
    const INR_SELLER_RESPONDED_TO_DISPUTE = 'INRSellerRespondedToDispute';
    const ITEMS_CANCELED = 'ItemsCanceled';
    const ITEM_ADDED_TO_BID_GROUP = 'ItemAddedToBidGroup';
    const ITEM_ADDED_TO_WATCH_LIST = 'ItemAddedToWatchList';
    const ITEM_CLOSED = 'ItemClosed';
    const ITEM_EXTENDED = 'ItemExtended';
    const ITEM_LISTED = 'ItemListed';
    const ITEM_LOST = 'ItemLost';
    const ITEM_MARKED_PAID = 'ItemMarkedPaid';
    const ITEM_MARKED_SHIPPED = 'ItemMarkedShipped';
    const ITEM_REMOVED_FROM_BID_GROUP = 'ItemRemovedFromBidGroup';
    const ITEM_REMOVED_FROM_WATCH_LIST = 'ItemRemovedFromWatchList';
    const ITEM_REVISED = 'ItemRevised';
    const ITEM_REVISED_ADD_CHARITY = 'ItemRevisedAddCharity';
    const ITEM_SOLD = 'ItemSold';
    const ITEM_SUSPENDED = 'ItemSuspended';
    const ITEM_UNSOLD = 'ItemUnsold';
    const ITEM_WON = 'ItemWon';
    const MY_MESSAGESE_BAY_MESSAGE = 'MyMessageseBayMessage';
    const MY_MESSAGESE_BAY_MESSAGE_HEADER = 'MyMessageseBayMessageHeader';
    const MY_MESSAGESM2M_MESSAGE = 'MyMessagesM2MMessage';
    const MY_MESSAGESM2M_MESSAGE_HEADER = 'MyMessagesM2MMessageHeader';
    const MY_MESSAGES_ALERT = 'MyMessagesAlert';
    const MY_MESSAGES_ALERT_HEADER = 'MyMessagesAlertHeader';
    const MY_MESSAGES_HIGH_PRIORITY_MESSAGE = 'MyMessagesHighPriorityMessage';
    const MY_MESSAGES_HIGH_PRIORITY_MESSAGE_HEADER = 'MyMessagesHighPriorityMessageHeader';
    const NONE = 'None';
    const OUT_BID = 'OutBid';
    const PASSWORD_CHANGED = 'PasswordChanged';
    const PASSWORD_HINT_CHANGED = 'PasswordHintChanged';
    const PAYMENT_DETAIL_CHANGED = 'PaymentDetailChanged';
    const PAYMENT_REMINDER = 'PaymentReminder';
    const PLACE_OFFER = 'PlaceOffer';
    const READY_FOR_PAYOUT = 'ReadyForPayout';
    const READY_TO_SHIP = 'ReadyToShip';
    const REFUND_FAILURE = 'RefundFailure';
    const REFUND_SUCCESS = 'RefundSuccess';
    const REMOVE_FROM_BID_GROUP = 'RemoveFromBidGroup';
    const REMOVE_FROM_WATCH_LIST = 'RemoveFromWatchList';
    const RETURN_CLOSED = 'ReturnClosed';
    const RETURN_CREATED = 'ReturnCreated';
    const RETURN_DELIVERED = 'ReturnDelivered';
    const RETURN_ESCALATED = 'ReturnEscalated';
    const RETURN_REFUND_OVERDUE = 'ReturnRefundOverdue';
    const RETURN_SELLER_INFO_OVERDUE = 'ReturnSellerInfoOverdue';
    const RETURN_SHIPPED = 'ReturnShipped';
    const RETURN_WAITING_FOR_SELLER_INFO = 'ReturnWaitingForSellerInfo';
    const SECOND_CHANCE_OFFER = 'SecondChanceOffer';
    const SELLER_CLOSED_DISPUTE = 'SellerClosedDispute';
    const SELLER_OPENED_DISPUTE = 'SellerOpenedDispute';
    const SELLER_RESPONDED_TO_DISPUTE = 'SellerRespondedToDispute';
    const SHOPPING_CART_ITEM_ENDING_SOON = 'ShoppingCartItemEndingSoon';
    const THIRD_PARTY_CART_CHECKOUT = 'ThirdPartyCartCheckout';
    const TOKEN_REVOCATION = 'TokenRevocation';
    const UNMATCHED_PAYMENT_RECEIVED = 'UnmatchedPaymentReceived';
    const USERID_CHANGED = 'UserIDChanged';
    const WATCHED_ITEM_ENDING_SOON = 'WatchedItemEndingSoon';
}
